<?php
session_start();
include("base.php");
$body="";
$title="Cours - Thème 1 ";

$reponse = $db	->query('SELECT nom,nom_fichier FROM upload');
  
// On affiche le resultat
while ($donnees = $reponse->fetch())
{
	 $nom=$donnees["nom_fichier"];
     $fichier=$donnees["nom"];
     echo "</br>";
     echo "<a href='upload/$fichier'>  $nom </a>\n";
}
$reponse->closeCursor();
//GERE LES SESSION
//AFFICHE LE FORMULAIRE D'UPLOAD SI L'ADMIN EST CONNECTE
if(isset($_SESSION['pseudo'])){
	if($_SESSION['pseudo']=='admin'){
		echo 'Connecté en tant qu '. $_SESSION['pseudo'];
		echo "<a href='upload.php'>Ajouter un cours</a>";
	}
	else{
		echo 'Pas connecte en tant qu admin : '.$_SESSION['pseudo'];
	}
}
else{
	echo 'pas de variable de session active';
}

include("template.php");
?>

