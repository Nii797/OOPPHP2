<?php

require_once('drink.php');
require_once('food.php');
require_once('review.php');
require_once('user.php');

$juice = new Drink('JUS',6,'img/juice.png','dingin');
$coffee = new Drink('KOPI',5,'img/coffee.png','panas');
$thaitea = new Drink('THAI-TEA',3,'img/Thai-Tea.png','dingin');

// minuman
$curry = new Food('GULAI',9,'img/curry.png',2);
$pasta = new Food('PASTA',12,'img/pasta.png',3);
$sate = new Food('SATE',6,'img/sate.png',1);

$menus = array($juice, $coffee, $thaitea, $curry, $pasta, $sate);

// new menambahkan user
$user1 = new User('Alex', 'pria');
$user2 = new User('Emma', 'wanita');
$user3 = new User('Alex', 'wanita');
$user4 = new User('Chris', 'pria');

$users = array($user1, $user2, $user3, $user4);

// NEW
$review1 = new Review($juice->getName(), $user1->getId(), 'Yummy');
$review2 = new Review($curry->getName(), $user1->getId(), 'Sangat sehat');
$review3 = new Review($coffee->getName(), $user2->getId(), 'Wanginya harum');
$review4 = new Review($pasta->getName(), $user2->getId(), 'Sausnya enak :)');
$review5 = new Review($juice->getName(), $user3->getId(), 'Hanya jus jeruk biasa');
$review6 = new Review($curry->getName(), $user3->getId(), 'Rasanya enak untuk harganya');
$review7 = new Review($coffee->getName(), $user4->getId(), 'Kepahitannya cukup.');
$review8 = new Review($pasta->getName(), $user4->getId(), 'Banhan yang digunakan berkualitas.');

$reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8);

?>