<?php
// dihapus
// require_once('menu.php');

// import file drink.php dan food.php
require_once('drink.php');
require_once('food.php');


// warisan dari Menu child Food dan Drink

// makanan 
// tambah argument 'dingin' dan 'panas' untuk menambahkan type
$juice = new Drink('JUS',6,'img/juice.png','dingin');
$coffee = new Drink('KOPI',5,'img/coffee.png','panas');
$thaitea = new Drink('THAI-TEA',3,'img/Thai-Tea.png','dingin');

// minuman
$curry = new Food('GULAI',9,'img/curry.png',2);
$pasta = new Food('PASTA',12,'img/pasta.png',3);
$sate = new Food('SATE',6,'img/sate.png',1);

$menus = array($juice, $coffee, $thaitea, $curry, $pasta, $sate);

?>