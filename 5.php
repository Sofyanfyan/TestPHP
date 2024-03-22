<?php

$no = 100;

function jumlah($no){

   return(1*$no);

}
/*

pertama, sebelumnya ada beberapa isu penulisan syntax pertama pada waktu pemanggillan function jumlah(), 
harus memakai tanda kurung, bukan kurung siku.

kedua, fungsi jumlah() mengharapkan sebuah argumen, jadi saat memanggilnya, harus melewati argumen di dalam tanda kurung.

ketiga, di dalam fungsi jumlah(), hanya dapat mengalikan argumen dengan 1, yang tidak mengubah nilainya.

*/ 
 


echo jumlah(10);

// output akan menjadi angka 100