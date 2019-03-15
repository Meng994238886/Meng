<?php 
// class Db{
//	递归实现斐波那契数列
	echo fbnq(7);
	function fbnq($n){
		if($n<=0){
			return 0;
		}
		if($n == 1 || $n == 2){
			return 1;
		}

		return fbnq($n-1)+fbnq($n-2);
	}
// }
echo "<br/>";
	//非递归实现斐波那契数列
	$n = 8;
	$array[1]=$array[2]=1;

	for ($i=3; $i <= $n; $i++) { 
		# code...
		$array[$i]=$array[$i-1]+$array[$i-2];
	}
	// var_dump($array);
	$str = implode(",", $array);

	echo $str;
?>