<?php



//MODIFIE DONNEE $_GET

include("base.php");



if($_POST['nommod']!=NULL || $_POST['repmod']!=NULL || $_POST['indmod']!=NULL || $_POST['idmod']!=NULL){
	$stat = $db->prepare('UPDATE exercice SET ex_nom= :ex_nom,ex_reponse= :ex_reponse, ex_indice= :ex_indice WHERE ex_id=:ex_id');
	$stat->bindParam(':ex_nom',$_POST['nommod']);
	$stat->bindParam(':ex_reponse',$_POST['repmod']);
	$stat->bindParam(':ex_indice',$_POST['indmod']);
	$stat->bindParam(':ex_id',$_POST['idmod']);
	$modif=$stat->execute();
}

$body="<form method='POST'action='FormMod.php'>";
$body.="Modifier un exercice\n";
$body.="</br>\n";
$body.="Nom";
$body.="<textarea id=nommod name=nommod rows=15 cols=60> </textarea>\n";
$body.="Réponse";
$body.="<textarea id=repmod name=repmod rows=5 cols=50> </textarea>\n";
$body.="indice";
$body.="<textarea id=indmod name=indmod rows=5 cols=50> </textarea>\n";
$body.="id";
$body.="<input type=TEXT id=idmod name=idmod >\n";
$body.="<input type=submit id=modifier name=modifier >\n";
$body.="</form>";



$body.='<a href="affiche.php"> Voir la table exercice</a>';

include("template.php");
?>
