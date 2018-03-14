<?php 

if(isset($_GET['action'])){

	if($_GET['action'] == 'signIn'){
		if(notEmptyArray($_POST) && issetArray($_POST,['password','login']) ){
			connectUser($_POST['login'],$_POST['password']);
		}
	}elseif ($_GET['action'] == "") {
		# code...
	}
}else{
	signInView();
}