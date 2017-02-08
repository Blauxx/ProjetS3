<?php

require_once "tags.lib.php";
require("base.php");
$body='';
$title ="Affichage de la table client\n";
$css ="multiplication.css";


$sth = $db->prepare("DELETE FROM exercice WHERE ex_id= :ex_id ");
$sth->bindParam(':ex_id', $_POST['user_id']);
$sth->execute();


$res=$db->query('SELECT ex_nom,ex_reponse,ex_indice,ex_id from exercice');





$body.="<h1>Liste des exercices</h1>\n";

$body.="<table>";
$body.="\n<tr><td class=id>id</td><td>nom</td><td>reponse</td><td>indice</td></tr>\n";


while($row=$res->fetch()){
	$body.="<tr>";
	$body.="<td class=id>$row[ex_id]</td>";
	$body.="<td>$row[ex_nom]</td>";
	$body.="<td>$row[ex_reponse]</td>";
	$body.="<td>$row[ex_indice]</td>\n";
	$body.="<form method='POST' action='affiche.php'>\n";
	$body.="<p><input type=hidden value=$row[ex_id] name='user_id' >\n</p>";
	$body.="<td><p><input type=Submit value='Supprimer' name=bouton >\n</p></td>";
	$body.="<td><a href=FormMod.php><input type=button value='Modifier' id=bouton name=bouton ></a>\n</td>";
	$body.="</form>\n";
	$body.="</tr>";
}

$body.="</table>\n";

$body.='<a href="FormInsert.php"> Retour au formulaire</a>';

include("template.php");

?>
