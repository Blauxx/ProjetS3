<!DOCTYPE html>
<html>
<head>
<?php
	if(isset($title)) echo"<title>$title</title>\n";
	if (isset($css)) echo"<link rel=stylesheet type=text/css href='css/$css'/>\n";
	
?>
</head>
<body>
<?php 

$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';

echo $body; 
?>

</body>
</html>
