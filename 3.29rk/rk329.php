<?php 



echo FirstNotRepeatingChar('44aAAgCCsd122');

function FirstNotRepeatingChar($str){


	$len = strlen($str);

	for ($i=0; $i < $len; $i++) { 
		# code...
		$con = substr_count($str,$str[$i]);

		if($con==1){
			return $i;
		}
	}

	return -1;

}



?>