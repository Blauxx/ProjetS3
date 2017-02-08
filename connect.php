<?php

try
{

	$body="";

$css="style";
	require("template.php");
$db = new PDO('mysql:host=localhost;dbname=math', 'root', '');



}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}




?>