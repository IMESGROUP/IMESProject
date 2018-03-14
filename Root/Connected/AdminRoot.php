<?php
if(isset($_GET['action'])){

	if($_GET['action'] == 'addUser'){
		if(notEmptyArray($_POST) && issetArray($_POST,['userType','userName','userSurname','password','mail']) ){
			$type1 = ['Etudiant','Professeur','Asministrateur'];
			$type2 = ['student','teacher','admin'];
			for($i = 0 ;$i < count($type1); $i++) {
				if($_POST['userType'] == $type1[$i]) {
					$userType = $type2[$i];
				}
			}
	
			addUser($_POST['password'],$userType,$_POST['userName'],$_POST['userSurname'],$_POST['mail']);
		}
	}elseif ($_GET['action'] == "") {
		# code...
	}else{
		require('./View/accueil.php');
	}
}else{

	require('./View/accueil.php');
}