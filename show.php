<?php 
require_once('menu.php');
require_once('data.php');

$menuName = $_GET['name'];
// Panggil method finByName dari class Menu
$menu = Menu::findByName($menus, $menuName);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
    <title>Document</title>
</head>
<body>
    <div class="review-wrapper container">
    
    <?php if ($menu instanceof Drink): ?>
        <img src="<?php echo $menu->getImage() ?>" alt="Minuman" class="menu-item-image">
        <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
        <p class="menu-item-type"><?php echo $menu->getType() ?></p>
    <?php else: ?>
        <img src="<?php echo $menu->getImage() ?>" alt="Minuman" class="menu-item-image">
        <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
        <?php for ($i=0; $i<$menu->getSpice(); $i++): ?>
            <img src="img/chilli.png" class='icon-spiciness'>
        <?php endfor ?> 
    <?php endif ?>   
        <p class="price">Rp. <?php echo $menu->getTaxIncludedPrice() ?></p>
        <a href="index.php">← Kembali ke Menu</a>
    </div>
</body>
</html>