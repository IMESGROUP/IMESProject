<?php
namespace IMES\Model;
require('Manager.php');

class ConnectionManager extends Manager{
	public function connection($login,$password) {
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT * FROM user WHERE login = ?');
		$req->execute(array($login));
		$value = $req->fetch();
		if(PASSWORD_VERIFY($password,$value['password'])){
			$_SESSION['IDUser'] = $value['IDUser'];
			$_SESSION['connected'] = true;
			$_SESSION['userType'] =  $value['userType'];
			return true;
		}return false;
	}
}