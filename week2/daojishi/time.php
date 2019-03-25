<?php 

$time = time();

$time = $time*1000;

// echo $time;die;

echo json_encode(['time'=>$time]);


?>