<?php

$input = "Kd brg=7328482, NmBrg=Buavita Jambu, HrBrg:8.500, QtyBrg=2, TtlBayar:17.000";
// Output :
// 	$Kd_Brg = 7328482;
// 	$NmBrg = Buavita Jambu; 
// 	$HrBrg = 8.500; 
// 	$QtyBrg = 2; 
// 	$TtlBayar = 17.000;


$input = str_replace(':', '=', $input);
$input = str_replace('=', ' = ', $input);

$arrayOfString = explode(", ", $input);
var_dump($arrayOfString);