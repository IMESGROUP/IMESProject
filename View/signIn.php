<?php 
ob_start();
$title = "Identification";?>

	<form method="post" action="./index.php?action=signIn">
		<input type="text" name="login">
		<input type="password" name="password">
		<input type="submit" name="submit">
	</form>

<?php 
$content = ob_get_clean();
require("Template.php");?>