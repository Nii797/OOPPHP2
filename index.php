<!-- PENYELESAIAN -->
<!-- MENAMBHKAN LEVEL KEPEDASAN PADA MAKANAN DENGAN MENGGUNAKAN ICON ATAU GAMBAR -->
<?php 
require_once('data.php');
require_once('menu.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Selamat Datang di Cafe Soni</h1>

    <!-- Cetak property $count milik class Menu -->
    <h3>Jumlah Menu : <?php echo Menu::getCount() ?></h3>
    
    <form method="post" action="confirm.php">
      <div class="menu-items">
        <?php foreach ($menus as $menu): ?>
          <div class="menu-item">
            <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
            <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>

            <!-- terbaru -->
            <!-- Gunakan statement if untuk memanggil method getType ketika $menu adalah instance dari class Drink -->            
            <?php if ($menu instanceof Drink): ?>
              <p class="menu-item-type"><?php echo $menu->getType() ?></p>
            <?php else: ?>
              <?php for ($i=0; $i<$menu->getSpice(); $i++): ?>
                <img class="icon-spiciness" src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/chilli.png" alt="level">
              <?php endfor ?>  
            <?php endif ?>

            <p class="price">$<?php echo $menu->getTaxIncludedPrice() ?> (termasuk pajak)</p>
            <span>Qty: </span>
            <input type="text" value="0" name="<?php echo $menu->getName() ?>">
          </div>
        <?php endforeach ?>
      </div>
      <input type="submit" value="Pesan">
    </form>
  </div>
</body>
</html>
