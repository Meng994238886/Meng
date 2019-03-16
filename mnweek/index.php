<?php 
include 'Student.php';

$obj1 = new Student('张三1','20');
$obj2 = new Student('张三2','85');
$obj3 = new Student('张三3','25');
$obj4 = new Student('张三4','24');
$obj5 = new Student('张三5','56');
$obj6 = new Student('张三6','11');

$arr= array($obj1,$obj2,$obj3,$obj4,$obj5,$obj6);

echo '<pre/>';
print_r($arr);

$str = implode(" ", $arr);

var_dump($str);

?>