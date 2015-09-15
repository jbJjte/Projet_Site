
<?php require_once("param.inc.php"); ?>
<?php 
	$msg="Connexion echouee";
	if (filter_var($_POST['login'],FILTER_VALIDATE_EMAIL)) {
		$login = mysqli_real_escape_string($_POST['login']);
		$res=$mysqli->query("SELECT count(1) FROM membre WHERE mail='$login';");
		if ($res==0) {
			$msg ='Utilisateur inconnu';
		}
		else {
			$password= mysqli_real_escape_string($_POST['password']);
			$res=$mysqli->query("SELECT count(1) FROM membre WHERE mail= '$login'  AND mdp= '$password';" );
			if (!$res) {
				$msg 'Mot de passe incorrect';
			}
			else {
				$_SESSION['name']= $mysqli->query("SELECT nom FROM membre WHERE mail= '$login' ;");
				$_SESSION['fName']= $mysqli->query("SELECT prenom FROM membre WHERE mail= '$login' ;");
				$msg='Connexion reussie';
			}
		}
	}
	else {
		$msg="Erreur sur l'email";
	}
	$_SESSION['msg']=$msg;
?>