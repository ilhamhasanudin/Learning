<?php
// P2 - PHP Dasar
// sintaks php

// standar output
// echo, print menampilkan kelayar
// print_r untuk menampilkan kelayar
// var_dump untuk menampilkan string 

//penulisan sintaks php
// 1. php didalam html
// 2. HTML di dalam php

// <!DOCTYPE html>
// <html lang="en">
//     <head>
//         <meta charset+"UTF-8">
//         <title> Belejar PHP</title>

// </head>
// <body>
//     <h1> halo, selamat datang <?php echo "$nama";
// </body>
// </html>




// varialbel dan tipe data
// variabel 
// aturan variabel, tidak boleh diawali angka,
// tetapi boleh mengandung angka cnth nama1
// $nama = "ilham";

// operator
// aritmatika
// + - * / %

// Operator penggabung string / Concenate 
// .

// $nama_depan = "Ilham";
// $nama_belakang = "nur hasanudin";

// echo $nama_depan . " " . $nama_belakang

// Operator assignment 
// = , += , -= , /= , %= , .=
// $x = 1;
// $x += 5;
// echo $x;
// $nama = "ilham";
// $nama .= " ";
// $nama .= "Nur"; 
// echo $nama ;

// operator perbandingan 
// < , > , <= , >= , == , != 
// var_dump(1 == "1");

// Operator identitas 
// ===, !==
// var_dump(1 === "1");

// Operator identitas 
// &&, || , !
$x = 10;

var_dump($x < 20 && $x % 2 == 0);