<?php 



// a changer
$css = 'style2.css';

include("base.php");


// $result = exercice de la bdd
$result = $db->query('SELECT ex_nom from exercice where ex_id =1',PDO::FETCH_ASSOC);


// $reponse = reponse de la bdd
$reponse = $db->query('SELECT ex_nom from exercice where ex_id =1',PDO::FETCH_ASSOC);
$reponse=$reponse->fetch();

$title ="Exercice\n";

$body=' ';



$body.="<div id='contenu'>\n";
$body.="<div class='in'>\n";
$body.="<div class='exercice'>\n";

$body.="<h1> Exercice </h1>";

// Si l'exercice existe ==
if ($row=$result->fetch()) {
$body.= "<p>{$row['ex_nom']}</p>";

$body.= "<form method='post' action={$_SERVER['PHP_SELF']}>";
$body.="<p> <label for='rep'> En vous aidant du texte la reponse est    :</label> <input type='text' name='rep'/> </p>";
$body.="<input type='submit' value='Envoyez la reponse' /> ";
$body.="</form>\n";


// variables a changer en fonction de la bdd
if (isset($_POST['rep'])){
if ($reponse["ex_nom"] != $_POST['rep']){
	$body.="0/10";
	//var_dump($_POST['rep']);
	//var_dump($reponse);
	$body.=$reponse["ex_nom"];
	
}
else {
	$body.="10/10" ;
$body.=$reponse["ex_nom"];}
}
$body.= "<form method='post' action={$_SERVER['PHP_SELF']} >";
$body.="<p> <input type='submit' value='Recommencer '/> </p>";
$body.="</form>\n" ;


}
$body.="</div>";

$body.="<div class='droite'>\n";

/*changer les variables + liens du site
$body.='<a href="mon_lien.php?param='.$cours_id.'">Rappel cours</a>' ;
$body.="<br/> \n";

$body.='<a href="mon_lien.php?param='.$exercices.'">Exercice</a>';
*/

// variables
$body.="<h1> Mme Pacou </h1>";
$body.="<p> N Exercice : </p>";
//echo $reponse["nom"];

//$body.="<p> Nom du theme : $nom_theme </p>";
$body.="<p> Progression </p>";

$body.="<p> Reponse a l'exercice (vrai / faux) : </p>";

$body.="</div>\n";
$body.="</div>\n";
$body.="</div>\n";

$body.="<br/>\n";
$body.="<br/>\n";



// faire css
?>



