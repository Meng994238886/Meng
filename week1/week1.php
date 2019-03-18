<?php 

// echo 1;die;
echo sum(100);
echo '<br/>';
echo sum2(1,100);
echo '<br/>';
echo sum3(1,100);
echo '<br/>';
echo jc(4);
echo '<br/>';
echo jc(5);
echo '<br/>';
echo hw('adda');

//第一种1-100求和输出
function sum($num){
	for ($i=1; $i < 100; $i++) { 
		$num+=$i;
	}
		return $num;
}

//第二种1-100求和输出
function sum2($a,$b){

	echo ($a+$b)*50;
}

//第三种1-100求和输出
function sum3($c,$d){
	$str=range($c, $d);

	$sum=array_sum($str);

	echo $sum;
}

//阶乘
function jc($num,$j=1){
	for ($i=$num; $i >0 ; $i--) { 
		# code...
		$j=$i*$j;

		if($i==1){
			return $j;
		}
	}
}

//递归阶乘
function dgjc($num,$j=1){
	if($num==1){
		return $j;
	}

	$j=$num*$j;

	$num--;

	return dgjc($num,$j);
}

//判断回文字符串
function hw($str){
	$aa=strrev($str);

	if($aa==$str){
		echo 'yes';
	}else{
		echo 'no';
	}
}
?>