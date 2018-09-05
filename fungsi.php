<?php

/*
	Setiap fungsi memiliki logika yang sama
	yaitu membutuhkan dua data (number 1 dan number 2) untuk diolah

	fungsi add untuk menjumlahkan kedua data, subtract untuk mengurangi, multiple untuk kali, dan divide untuk pembagian.

	setelah data diproses, kemudian di echo supaya tampil di layar hasilnya.

	pemrosesan data dilakukan di variable $result
*/

function add($number_1, $number_2)
{
	$result = $number_1 + $number_2;
	echo "Hasil Penjumlahan Antara {$number_1} dan {$number_2} Adalah = {$result} ";
}

function subtract($number_1, $number_2)
{
	$result = $number_1 - $number_2;
	echo "Hasil Pengurangan Antara {$number_1} dan {$number_2} Adalah = {$result} ";
}

function multiple($number_1, $number_2)
{
	$result = $number_1 * $number_2;
	echo "Hasil Perkalian Antara {$number_1} dan {$number_2} Adalah = {$result} ";
}

function divide($number_1, $number_2)
{
	$result = $number_1 / $number_2;
	echo "Hasil Pembagian Antara {$number_1} dan {$number_2} Adalah = {$result} ";
}