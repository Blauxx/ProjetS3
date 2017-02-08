<?php

require_once "tags.lib.php";
include("base.php");


if($_POST['nom']!=NULL || $_POST['reponse']!=NULL || $_POST['indice']!=NULL){
	$stmt=$db->prepare('INSERT INTO exercice(ex_nom,ex_reponse,ex_indice) VALUES ( :ex_nom, :ex_reponse, :ex_indice)');
	$stmt->bindParam(':ex_nom', $_POST['nom']);
	$stmt->bindParam(':ex_reponse', $_POST['reponse']);
	$stmt->bindParam(':ex_indice', $_POST['indice']);
	$stmt->execute();
}

$css ="css/multiplication.css";

// INSERTION

$body ="<h1>Insertion dans la table Exercice</h1>\n";
$body.="<form method='POST' action='FormInsert.php'>\n";
$body.="Saisir l'énoncé de l'exercice:<textarea id=nom name=nom rows=15 cols=60></textarea>\n";
$body.="Saisir la réponse de l'exercice:<textarea id=reponse name=reponse rows=5 cols=50></textarea>\n";
$body.="Saisir un indice ou pas:<textarea id=indice name=indice rows=5 cols=50></textarea>\n";
$body.="<input type=submit id=bouton name=bouton >\n";
$body.="</form>\n";






$body.='<a href="affiche.php"> Voir la table exercice</a>';


include("template.php");

?>

