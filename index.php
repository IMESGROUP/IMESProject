<?php
session_start();
//$_SESSION = array();
require_once('./Controller/FunctionTest/Test.php');

try{
	/*test if the user is already connected to the data base or not*/
	if(array_key_exists('connected', $_SESSION)) {
		/*test the kind of user*/
		if($_SESSION['userType'] == "admin") {
			require_once('./Controller/Connected/AdminController.php');
			require('./Root/Connected/AdminRoot.php');
		}elseif ($_SESSION['userType'] == "teacher") {
			require_once('./Controller/Connected/TeacherController.php');
			require('./Root/Connected/TeacherRoot.php');
		}elseif($_SESSION['userType'] == "student") {
			require_once('./Controller/Connected/StudentController.php');
			require('./Root/Connected/StudentRoot.php');
		}else{
			throw new Exception("Vous n'avez pas accés à  cette page.", 1);	
		}
		require_once('./Controller/Connected/CommonController.php');
		require('./Root/Connected/CommonRoot.php');
	}else{
		require_once('./Controller/Disconnected/DisconnectedController.php');
		require('./Root/Disconnected/RootForDisconnected.php');
	}
}

catch (Exception $e) {
    $_SESSION['error'] = $e->getMessage();
    
}