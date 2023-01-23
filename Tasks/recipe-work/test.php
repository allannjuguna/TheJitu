<?php

$str = "apple,banana,cherry";
function stringTolist($str){
	$arr = explode(",", $str);
	$final="";
	foreach ($arr as $value) {
		$final.='<li class="item-value">'.$value."</li>";
	}
	return $final;
}


echo stringTolist($str);
?>
