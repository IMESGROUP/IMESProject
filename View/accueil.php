<?php
ob_start();
$title = 'Accueil';
?>
	<form method="POST" action="./index.php?action=addUser">
		<select name="userType">
			<option>Etudiant</option>
			<option>Professeur</option>
			<option>Administrateur</option>
		</select>
		<input type="text" name="userName">
		<input type="text" name="userSurname">
		<input type="password" name="password">
		<input type="mail" name="mail">
		<input type="submit" name="submit">
	</form>
	<a href="./index.php?action=signOut">déconnexion</a>
<?php $content = ob_get_clean();
require('Template.php');