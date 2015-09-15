<!DOCTYPE html>
<html>
	<head>
		<title>Clients à spammer</title> 
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Liste des clients a spammer</h1>
		<?php 
			$mysqli = new mysqli("127.0.0.1:8888", "root", "root", "commercial");
			if ($mysqli->connect_errno) {
				echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; 
			}else{
				$res=$mysqli->query("SELECT * FROM clients");
				if(!$res){
					echo "<p>aucun resultat</p>"; 
				}
				else{
				while($tuple=$res->fetch_assoc()){
					echo '<p>'.htmlentities($tuple['nom']).'</p>'; }
				} 
			}
		?>
	</body>
</html>