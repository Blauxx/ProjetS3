<?php
function tag($tag,$content=null,$attributs=array(),$after='',$before=''){

$str_att='';

foreach($attributs as $key =>$value){
	$str_att.=" $key=\"$value\"";
}
	if($content)return "$before<$tag$str_att>$content</$tag>$after";
	else return "$before<$tag$str_att/>$after";
}



function paragraphe($content,$attributs=array()){
return tag('p',$content,$attributs,"\n");
}



function image($name,$attributs=array(),$directory='images'){
	$attributs=array('src'=>"$directory/$name");
return tag('img',$content,$attributs,"\n");
}	

?>
