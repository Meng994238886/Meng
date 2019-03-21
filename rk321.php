<?php 


echo h(6,5);

//1

function h($n,$m){
	$arr = range(1, $n);
	$str = implode('', $arr);
	// echo $str;
	$len = strlen($str);
	// echo $len;
	for ($i=1; ; $i++) { 
		# code...
		if(strlen($str) == 1){
			return $str;
		}
		if($i%$m==0){
			$str = substr($str,1);
		}else{
			$a = substr($str, 0,1);
			$str = substr($str,1);

			$str.=$a;
		}
	}
}



?>