<?php

$input = "Total pembelian baju dinas sebesar Rp.757.000";
// Output :
// a.	757.000
// b.	757000


$posisiRupiah = strpos($input, "Rp.");

if($posisiRupiah){
   
   $substring = substr($input, $posisiRupiah + 3);
   echo "a. " . $substring . PHP_EOL;
   $number = str_replace(".", "", $substring);
   echo "b. " . $number . PHP_EOL;
} else {
   
   echo "Nominal rupiah tidak ditemukan";
}