<?php 

echo hua($n=100,$m=999);
function hua($n,$m){

	for ($i=$n; $i < $m; $i++) { 
		# code...
		$bai = floor($i/100);
		$shi = floor($i/10%10);
		$ge = floor($i%10);

		$j = $bai*$bai*$bai+$shi*$shi*$shi+$ge*$ge*$ge;

		if($j==$i){
			echo '<br/>';

			echo $i;
		}
	}
}
?>