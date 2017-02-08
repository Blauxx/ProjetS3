<?php
session_start();
session_destroy();
$title="Deconnexion";
include("base.php");

if($id==0) erreur(ERR_IS_NOT_CO);

echo '<p>Vous êtes maintenant deconnecté</p>';

$body.='</body>';
$body.='</html>';
?>