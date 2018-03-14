<?php 
namespace IMES\Model;
require('Manager.php');

class UserManager extends Manager {

	public function addUser($password,$userType,$userName,$userSurname,$mail) {
		
        $db = $this->dbConnect();
        $req = $db->query('SELECT MAX(IDUser) FROM user');
        $login = strtolower(substr($userSurname,0,2).substr($userName, 0,2).($req->fetch()[0]+1));
        echo $login;
        $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
        $req1 = $db->prepare('INSERT INTO user(login,password,userType,userName,userSurname,mail) VALUES(?,?,?,?,?,?)');
        $req1->execute(array($login,$passwordHashed,$userType,$userName,$userSurname,$mail));
        $req1->closeCursor();
    }
}