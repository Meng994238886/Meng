<?php 

echo any(1,11);

function any($min,$max){
	// $min = 1;
	// $max = 11;

	$num=0;
	for ($i=$min; $i < $max; $i++) { 
		# code...
		$a = str_split($i);

		// var_dump($a);
		$len = count($a);
		for ($j=0; $j <= $len; $j++) { 
			# code...
			if($j==1){
				$num++;
			}
		}
	}
	return $num;
}
?>