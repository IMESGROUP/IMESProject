<?php
function signInView(){
	require('./View/signIn.php');
}

function connectUser($login,$password) {
	require('./Model/ConnectionManager.php');
	$connectObject = new \IMES\Model\ConnectionManager;
	$tryToConnect = $connectObject->connection($login,$password);
	if( $tryToConnect){
		welcome();
	}else{
		require('./View/signIn.php');
	}
}

function welcome(){
	if($_SESSION['userType'] == 'admin'){
		require('./View/accueil.php');
	}elseif($_SESSION['userType'] == 'student'){
		echo 'student';
	}else {
		echo 'teacher';
	}
}
