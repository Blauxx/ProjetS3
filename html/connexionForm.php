<!DOCTYPE html>
<html>
	<head>
		<title>Formulaire de connexion ( pop up)</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Simple JS Popin</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<script src="js/script.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="pop1" class="parentDisable">
			<div class="popin">
				<h2>Connetez vous hihi </h2>
				<form action=acceuil.php method='post'>
					<fieldset id='encadre'>
						<h3>Identifiez vous ! </h3></br></br>
						<label for="pseudo">Pseudo :</label>
						<input type=text name=pseudo id='pseudo'/></br>
						<label for="mdp">Mot de passe :</label>
						<input type=password name=mdp id='mdp'/></br>
					</fieldset>
					<input type='submit'  value='Se connecter' name='boutton' id='bouton' />
				</form>
			</div>
		</div>
		<a href="#" onClick="return pop('pop1')">Se connecter</a>
	</body>
</html>

	
		

	
	
	
