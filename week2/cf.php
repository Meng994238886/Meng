<?php 


// $arr[1,2,3,4];

// $arr = array(1,2,3,4);

echo ar([1,2,3,4]);



function ar($arr){


// var_dump($arr);die;

	$len = count($arr);

for ($i=0; $i < $len; $i++) { 
	# code...
	for ($j=0; $j < $len; $j++) { 
		# code...
		for ($n=0; $n < $len; $n++) { 
			# code...
			if($i!=$j && $i!=$n && $j!=$n){
				echo $arr[$i].$arr[$j].$arr[$n].'<br/>';
			}
		}
	}
}
}



?>