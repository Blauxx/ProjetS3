<!DOCTYPE html>
<html>
<head>
	<title>Formulaire pourl'upload</title>
</head>
<body>
	<form method="post" action="upload.php" enctype="multipart/form-data">
		<input type="hidden" name="taille_max" value=" 10048576">
		<input type="file" name="pdf" />
		<input type="text" name="nom_fichier" />
		
		<input type="submit" name="submit" value="Envoyer" />

	</form>


</body>
</html>