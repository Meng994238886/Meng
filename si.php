<?php 



echo Numberof(10);

function Numberof($str)
{
	// echo $str;

	// if($a = $str/2){
		
	// }else if($str%2==1){
	// 	echo 1;
	// }

	$aa = decbin($str.',');

	return substr_count($aa, 1);


	// $arr[] = explode(' ', $aa);

	// var_dump($aa);


	
}


?>