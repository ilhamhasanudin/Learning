<?php 
// Array
// variabel yang dapat memiliki banyak nilai 
// elemen pada array boleh memilik tipe berbeda

// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("senin", "selasa", "rabu");

//cara baru
$bulan = ["januari", "Februari", "maret",];
$arr1 = [123, "tulisan", false];

// cara menampilkan Array 
// var_dump / print_r

// var_dump($arr1);
// print_r($bulan);

// cara menampilkan 1 elemen pada array
// echo $arr1[1]

// cara menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari)
?>