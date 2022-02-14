<?php
// array 

// elemen pada array boleh memiliki tipe data yang berbeda
// variable yang mampu menampung banyak data
// array adalah pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// menggunakan array menggunakan cara lama 
$hari = array("senin", "selasa", "rabu", "kamis");
// menggunakan array dengan cara terbaru ia tanpa menggunakan elemen langsung menggunakan [] seperti js
$bulan = ["januari", "februari", "maret"];
$arr1 = ['123', 'tulisan', false];

// menampilkan array kelayar var dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($hari);
echo "<br>";

// menampilkan 1 elemen array

echo $arr1[0];

echo "<br>";

echo $bulan[2];