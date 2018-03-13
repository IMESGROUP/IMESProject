<?php

function connectUser($login,$password) {
	require('./Model/ConnectionManager.php');
	$connectObject = new \IMES\Model\ConnectionManager;
	$tryToConnect = $connectObject->connection($login,$password);
	if( $tryToConnect){
		require('./View/accueil.php');
	}else{
		require('./View/login.php');
	}
}
