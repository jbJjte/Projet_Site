<?php session_start()?>
<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			<a class="navbar-brand" href="#">Rugby Cars<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">				
				<li class="dropdown">
					<a href="test.php" class="dropdown-toggle" data-toggle="dropdown">Vous avez déjà un compte? Connexion <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a> 
					<ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="#">
							<form method="post" action="connexion.php">
								<div class="form-group">
									<label for="login">Mail</label>
									<input type="text" class="form-control" id="login" name="login" placeholder="Vous pouvez saisir votre mail ici...">
								</div>
								<div class="form-group">
									<label for="password">Mot de passe</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Vous pouvez saisir votre mot de passe ici...">
								</div>
								<button type="submit" class="btn btn-default">Connexion</button></a>
							</form>
						</li>
						<li class="divider"></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Nouveau sur Rugby Cars? S'inscrire <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a> 
					<ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="#">
							<form method="post" action="inscription.php">
								<div class="form-group">
									<label for="name" name="name">Nom</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Saisir votre nom ici...">
								</div>
								<div class="form-group">
									<label for="fName">Prenom</label>
									<input type="text" class="form-control" id="fName" name="fName" placeholder="Saisir votre prenom ici...">
								</div>
								<div class="form-group">
									<label for="login">E-mail</label>
									<input type="email" class="form-control" id="login" name="login" placeholder="Saisir votre e-mail ici...">
								</div>
								<div class="form-group">
									<label for="password">Mot de passe</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Saisir votre mot de passe ici...">
								</div>
								<button type="submit" class="btn btn-default">S'inscrire</button></a>
							</form>
						</li>
					</ul>
				</li>
				<li><a href="#">Liste des macths</a></li>
			</ul>
		</div>
	</div>
</nav>