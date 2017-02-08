<?php
function check_string($string,$long_max=24,$long_min=2){
	if(strlen($string)>$long_max)return 1;
	if(strlen($string)<$long_min)return 2;
	return 0;

}

function check_integer($integer,$long_max=10,$long_min=0){
	if(is_numeric($integer)){
		if(($integer)>$long_max)return 3;
		if(($integer)<$long_min)return 4;
	return 0;
	}
	else return 5;
	return 0;
}

$ERRORS=array(' OK',' trop long',' trop court',' trop grand',' trop petit'," n'est pas un nombre");

?>
