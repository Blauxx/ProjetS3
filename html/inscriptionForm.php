<!DOCTYPE html>
<html>
<head>
	<title>Inscription Formulaire</title>
</head>
<body>
	<h1>Inscription</h1>
	<form methode="post" action="inscription.php">
		<fieldset>
			<legend>Identifiants</legend>
			<label for="nom">* Nom :</label><input type="text" name="nom" id="nom"/></fieldset><br>
			<label for="prénom">* Prénom :</label><input type="text" name="prénom" id="prénom"/><br>
			<label for="pseudo">* Pseudo :</label><input type="text" name="pseudo" id="pseudo"/><br>
			<label for="mdp">Mot de passe :</label><input type="password" name="mdp" id="mdp"/><br>
			<label for="mdp">Confirmer le mot de passe :</label><input type="password" name="confirm" id="confirm"/><br>
			<label for="ville">Ville :</label><input type="text" name="ville" id="ville"/><br>
			<input type="submit" value="S'inscrire" name="boutton" id="bouton" /><br>
		</fieldset>


	</form>
</body>
</html>