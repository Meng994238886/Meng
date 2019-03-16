<?php 


echo he(100);
echo '<br/>';
// echo dghe(100);

//输出非递归阶乘
echo '<br/>';
echo jc(3);

//换行
echo '<br/>';
//输出递归阶乘
echo dgjc(4);
echo '<br/>';

echo hw('adda');


function he($sum){

	for($i=1;$i<100;$i++){

		$sum += $i;

	}

		return $sum;
}

// function dghe($sum,$a=1){
// 	if($sum==0){
// 		return false;
// 	}
// 	$sum+=$a;

// 	$a++;

// 	return dghe($sum,$a);

// }

//非递归阶乘
function jc($num,$j=1){
	for ($i=$num; $i > 0; $i--) { 
		# code...
		$j=$j*$i;
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


function hw($str){
	$rts=strrev($str);
	if($str==$rts){
		echo '回文';
	}else{
		echo 'NO回文';
	}
}
?>