<?php 
ob_start();
$title = "Identification";?>

	<form method="post" action="./index.php?action=signIn">
		<input type="text" name="login" placeholder="identifiant">
		<input type="password" name="password" placeholder="mot de passe">
		<input type="submit" name="submit">
	</form>

<?php 
$content = ob_get_clean();
require("Template.php");?>