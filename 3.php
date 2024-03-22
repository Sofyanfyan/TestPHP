<?php

// 3.	Script / code Perulangan dari 1 sampai 100, berapa kali angka 8 muncul?

$count = 0;

for($i=1; $i<=100; $i++){

   $num = strval($i);
   for($j=0; $j<strlen($num); $j++){
      
      // echo $num[$j] . PHP_EOL;

      if($num[$j] === '8') $count++;

   }
}

echo $count . PHP_EOL;