<?php

session_start();


$title="Acceuil du site";

if(isset($_SESSION['pseudo'])){
	echo"bienvenue" . $_SESSION['pseudo'];
}else{
	echo'pas connecté';
}
include("base.php");

include('connexion.php');	
?>