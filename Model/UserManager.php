<?php 
namespace IMES\Model;
require('Manager.php');

class UserManager extends Manager {

	public function addUser($login,$password){
        $db = $this->dbConnect();
        $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
        $req1 = $db->prepare('INSERT INTO user(userType,login,password) VALUES(?,?,?)');
        $req1->execute(array('admin',$login,$passwordHashed));
        $req1->closeCursor();
    }
}