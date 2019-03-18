<?php 
include 'Student.php';

$arr[]=new Student('孟琦1','1');
$arr[]=new Student('孟琦2','2');
$arr[]=new Student('孟琦3','3');
$arr[]=new Student('孟琦4','9');
$arr[]=new Student('孟琦5','4');
$arr[]=new Student('孟琦6','7');

// echo '<pre/>';
// var_dump($arr);

$len = count($arr);
// echo $len;
$a=0;
for ($i=0; $i < $len; $i++) { 
	# code...
	if($arr[$i]->age>$a){
		$a=$arr[$i]->age;
		$v=$arr[$i]->name;
	}
}

echo $v;

?>