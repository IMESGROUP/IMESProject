<?php

function addUser($password,$userType,$userName,$userSurname,$mail) {
	require("./Model/UserManager.php");
	$userObject = new \IMES\Model\UserManager;
	$userObject->addUser($password,$userType,$userName,$userSurname,$mail);
}