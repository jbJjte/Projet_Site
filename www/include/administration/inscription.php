<?php require_once("param.inc.php"); ?>
<?php 
	$msg='Inscription impossible';
	if (!is_null($_POST['login']) && !is_null($_POST['name'])  && !is_null($_POST['fName']) && !is_null($_POST['password']) )  {
		$login = mysqli_real_escape_string($_POST['login']);
		$password= mysqli_real_escape_string($_POST['password']);
		$name = mysqli_real_escape_string($_POST['name']);
		$fName = mysqli_real_escape_string($_POST['fName']);
		$password=password_hash($password, PASSWORD_DEFAULT)
		$res = $mysqli->query ("INSERT INTO membre VALUES (seq.nextvalue, )");
	}
	else {
		$msg='Veuillez saisir tous les champs';
	}
?>