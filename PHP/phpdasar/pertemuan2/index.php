<?php

// Pertemuan 2 - PHP Dasar
// Sintaks PHP 

// Standar Output
// echo, print
// print_r
// var_dump

// Penulisan sintaks PHP
// 1. PHP di datam HTML
// 2. HTML di datam PHP

// Variabel dan Tipe Data
// Variabel
// tidak bdleh diawati dengan angka, tapi boteh mengandung angka
// $nama = "Sandhika Gatih";
// echo "Halo, nama saya $nama";

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * &y;

// penggabung string / concatenation / concat
// .
// $nama_depan = "Sandhika";
// $nama_belakang = "Galih";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Sandhika";
// $nama .= " ";
// $nama .= "Galih";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == 5);

// identitas
// ===, !==
// var_dump(1 === "1");

// Logika
// &&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0);