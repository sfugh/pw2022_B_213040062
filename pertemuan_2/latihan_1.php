<?php 
// ini adalah latihan ke 1 php dasar
// sintaks php
// standar output
// echo, print
// print r
//var_dump untuk jumlah karakter

echo "billy ramadhan";

var_dump("billy");

echo true;  //boolean 1
echo false;   //boolean 0

//tanda kutip disesuaikan
echo "jum'at";

//penulisan sintaks php
//1. php didalam html
//2. html didalam php

//variabel dan type data
//1. variabel (menampung sebuah nilai) tidak boleh diawali dengan angka, tapi boleh mengandung angka.
$nama ="bill";
echo "nama saya $nama" //(interpolasi kutip dua)

//2. fungsi operator
// + - * / %

/*
$x = 10
$y = 20
echo $x * $y;
*/

//operator penggabung string / concatination
/*
$nama_depan = "tes";
$nama_belakang = "satu";
echo $nama_depan ." ". $nama_belakang; 
*/

//operator assignment
// +=, -=, *=, /=, %=, .=
/*
$x = 1;
$x -= 5;
echo $x; hasil -4
*/

//perbandingan
// <=, >=, <, >, ==.
//var_dump(1 < 5);

//identitas
//===, !==.
//var_dump(1 === "1")

//logika
//&&, ||, !
/*
$x = 10;
var_dump($x < 20 && $x % 2 == 0)
*/


/*
komentar
komentar baris
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <tittle>Belajar PHP</tittle>
</head>
<body>
    <h1>Halo selamat datang <?php echo $nama; ?></h1>
</body>
</html>