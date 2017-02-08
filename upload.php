<?php
session_start();
include("base.php");
$body="";
$title="Upload file";
$maxsize="2000000";
$nomFichier="";
//Formulaire d'upload
include("html/uploadForm.php");

//VERIFIE SI LE DOSSIER DE DESTINATION EXISTE
if(is_dir('upload')) {
    echo 'Le dossier existe';
} else {
    echo 'Le dossier n\'existe pas';
}
if ($_FILES['pdf']['error'] > 0) erreur(ERR_UPLOAD);
if ($_FILES['pdf']['size'] > $maxsize) erreur(ERR_TAILLE);

//VERIFIE SI LE NOM DU FICHIER EXISTE
  $query=$db->prepare('SELECT COUNT(*) AS nbr_fich FROM upload WHERE nom_fichier =:nom_fi');
    $query->bindValue(':nom_fi',$_POST["nom_fichier"], PDO::PARAM_STR);
    $query->execute();
    $nom_fic_free=($query->fetchColumn()==0)?1:0;
    $query->CloseCursor();

        if(!$nom_fic_free){
    	erreur(ERR_FICH_USED);
    	echo ERR_FICH_USED;
    	echo ERR_UPLOAD;
	}	
	else{





$extensions_valides = array('pdf','' );
$extension_upload= NULL;
//1. strrchr renvoie l'extension avec le point (« . »).
//2. substr(chaine,1) ignore le premier caractère de chaine.
//3. strtolower met l'extension en minuscules.
$extension_upload = strtolower(  substr(  strrchr($_FILES['pdf']['name'], '.')  ,1)  );
if (!in_array($extension_upload,$extensions_valides) ){
 echo "Extension incorrecte";
}
else{
	$nomFichier=$_SESSION["pseudo"]."_".$_FILES["pdf"]["name"];
	move_uploaded_file($_FILES['pdf']['tmp_name'], 'upload/'. $nomFichier);

$query=$db->prepare('INSERT INTO upload (nom, nom_fichier) VALUES(:nom,:nom_fichier)');
		 $query->bindParam(':nom',$nomFichier);
		  $query->bindParam(':nom_fichier',$_POST["nom_fichier"]);
		
		
	
	

	   $query->execute();

}

}
//STOCK LE FICHIER SUE LA BD




include("template.php");
?>


