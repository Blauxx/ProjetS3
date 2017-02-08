<?php

function erreur($err=''){
	if($err!=''){
		$mess=$err;
	}
	else{
		$body="Une erreur s\'est produite";
	}
	exit('<p>'.$mess.'</p>');



}


?>