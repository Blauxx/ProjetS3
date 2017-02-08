<?php


//Zone des variables globales
$title="Connexion";
$body="";
$css="";
include("connect.php");

//Appel les fichiers necessaires


//TRAITEMENT


if($id=0) erreur(ERR_IS_CO);

$message="";
//AFFICHE LE FORMULAIRE
if (!isset($_POST['pseudo'])) //On est dans la page de formulaire
{
	include('html/connexionForm.php');	
}
//ON VERIFIE LA CONNEXION

else{
	
	//SI UN DES CHAMP EST VIDE
	if (empty($_POST['pseudo']) || empty($_POST['mdp'])) {
		$message='<p>Un des champs est vide</p>';
		echo "<a href='acceuil.php'>revenir </a>au menu predecent";
	}
	//ON TESTE LE MDP
	else{

		$query=$db->prepare('SELECT id,nom,prenom,pseudo,mdp,ville,rang
        FROM client WHERE pseudo = :pseudo');
          $query->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
        $query->execute();
        $data=$query->fetch();
        $mdp=$_POST['mdp'];
		if( $data['mdp'] == $mdp ){
			$_SESSION['pseudo']= $data['pseudo'];
			$_SESSION['rang']= $data['rang'];
			$_SESSION['id']= $data['id'];

			$message='<h3>Connecter en tant que ' .$_SESSION["rang"]. '.</p><p>Bienvenue'.$_SESSION["pseudo"].'vous êtes connecté</h3>';	
		

		}
		//mdp ou pseudo non correspondant
		else{
			$message='<p>Pseudo ou mdp invalide</p>';
			echo "<a href='acceuil.php'>revenir </a>au menu predecent";

		}
 $query->CloseCursor();	
}
echo $message.'</div></body></html>';
}	

include("template.php");
?>