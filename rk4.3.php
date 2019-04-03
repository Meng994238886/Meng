<?php 

echo zheBan([1,2,7,4,8],7);

function zheBan($arr,$str){
	var_dump($arr);
	echo $str;

	echo '<br/>';

	foreach ($arr as $k => $v) {
		# code...
		if($v==$str){
			return $k;
		}
	}



	

	// for ($i=0; $i < count($arr); $i++) { 
	// 	# code...
	// 	if($arr[$i]==$str){
	// 		return --$arr[$i];
	// 		// $arr[$i]=$arr[$i]
	// 	}
	// }
}


?>