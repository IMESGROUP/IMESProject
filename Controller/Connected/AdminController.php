<?php

function addUser($login,$password) {
	require("./Model/UserManager.php");
	$userObject = new \IMES\Model\UserManager;
	$userObject->addUser($login,$password);
}