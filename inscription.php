<?php
session_start();
$title="Inscription";
$body="";
$css="";

include("base.php");

if ($id!=0) erreur(ERR_IS_CO);

//SI L'USER N'EST PAS CONNECTE
if(empty($_POST['pseudo']) ){
	
	//FORMULAIRE 
//Lien vers la page après le clique sur le bouton
$body.="<form action=inscription.php method='post'>";
	$body.="<fieldset id='encadre'>\n";
		$body.="<h3>Inscrivez vous ! </h3>\n";
		$body.="</br></br>";
		$body.="Nom";
		$body.="<input type=text name=nom id=nom/>";
		$body.="</br>\n";
		$body.="Prénom";
		$body.="<input type=text name=prenom id=prenom/>";
		$body.="</br>\n";
		$body.="Pseudo";
		$body.="<input type=text name=pseudo id=pseudo/>";
		$body.="</br>\n";
		$body.="Mot de passe";
		$body.="<input type=password name=mdp id=mdp/>";
		$body.="</br>\n";
		$body.="Confirmez Mot de passe";
		$body.="<input type=password name=confirm id=confirm/>";
		$body.="</br>\n";
		$body.="Ville";
		$body.="<input type=text name=ville id=ville/>";
		$body.="</br>\n";
	$body.="</fieldset>\n";
	$body.="<input type=submit  value='S inscrire' name=boutton id=bouton />";
	$body.="</br>\n";


$body.="</form>";	

}

//COMPILATION DE TEST 
else{
	//DECLARATION DES VARIABLES D'ERREURS
	$pseudo_erreur1 = NULL;
    $pseudo_erreur2 = NULL;
    $pseudo_erreur3 = NULL;
    $mdp_erreur = NULL;
    $email_erreur1 = NULL;
    $email_erreur2 = NULL;


   
    //On récupère les variables
    $i = 0;
    $confirm = md5($_POST['confirm']);
    $nom=$_POST["nom"];
 	$prenom=$_POST["prenom"];
    $pseudo=$_POST['pseudo']; 
	$mdp = md5($_POST['mdp']);
    $ville=$_POST["ville"];


    //ON VERIFIE LE PSEUDO
    //SI LA REQUETE EST EGALE A 0, LE PSEUDO N'EST PAS DEJA PRIS

    $query=$db->prepare('SELECT COUNT(*) AS nbr FROM client WHERE pseudo =:pseudo');
    $query->bindValue(':pseudo',$pseudo, PDO::PARAM_STR);
    $query->execute();
    $pseudo_free=($query->fetchColumn()==0)?1:0;
    $query->CloseCursor();
    if(!$pseudo_free){
    	$pseudo_erreur1="Pseudo déjà utilisé";
    	$i++;
	}
	if(strlen($pseudo)<3  ){
		$pseudo_erreur2="Votre pseudo est trop petit";
		$i++;
	}
	if(strlen($pseudo) > 15){
		$pseudo_erreur3 = "Votre pseudo est trop grand";
		$i++;
	}
	if($mdp != $confirm || empty($confirm) || empty($mdp))
	{
		$mdp_erreur="Mot de passe différents";
		$i++;
	}

	//AFFICHAGE DES ERREURS
	if($i==0){
		
		$body.="<h3>Inscription terminée</h3>";
		$body.='<p>Bievenue sur le site' .$_POST['pseudo']. ',vous faites maintenant partie du site';

		$query=$db->prepare('INSERT INTO client (nom,prenom,pseudo,mdp,ville) VALUES(:nom, :prenom, :pseudo, :mdp, :ville)');
		 $query->bindParam(':nom',$_POST['nom']);
		 $query->bindParam(':prenom',$_POST['prenom']);
		 $query->bindParam(':pseudo',$_POST['pseudo']);
		 $query->bindParam(':mdp',$_POST['mdp']);
		 $query->bindParam(':ville',$_POST['ville']);

	   $query->execute();
				
		//DEFINIT LES VARIABLES DE SESSION
	}

	else{

		$body.="<h2>Inscription Interrompue</h2>";
		if($i==1){
		$body.="<p>".$i." erreur s'est produite pendant l'inscription</p>";
	}else
	$body.="<p>".$i."erreurs se sont produites pendant l'inscription</p>";
		$body.="<p> $pseudo_erreur1	</p>";
		$body.="<p> $pseudo_erreur2	</p>";
		$body.="<p>  $pseudo_erreur3	</p>";
		$body.="<p>  $mdp_erreur </p>";
		
		$body.="<p>Cliquez <a href='inscription.php'>ici</a> pour recommencez l'inscription</p>";

	}

}
include("template.php");

?>
