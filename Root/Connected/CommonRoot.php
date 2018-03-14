<?php
if(isset($_GET['action'])){
	if($_GET['action'] == 'signOut'){
		signOut();
	}
}