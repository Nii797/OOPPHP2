<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="order-wrapper">
    <h2>Keranjang</h2>
    <!-- Deklarasikan variable $totalPayment -->
    <?php $totalPayment = 0 ?>
    
    <?php foreach ($menus as $menu): ?>
      <?php 
        $orderCount = $_POST[$menu->getName()];
        $menu->setOrderCount($orderCount);
        // Tingkatkan variabel $totalPayment
        $totalPayment += $menu->getTotalPrice();
      ?>
      <p class="order-amount">
        <?php echo $menu->getName() ?>
        x
        <?php echo $orderCount ?>
      </p>
      <p class="order-price">RP.<?php echo $menu->getTotalPrice() ?>K</p>
    <?php endforeach ?>
    <!-- Cetak variabel $totalPayment -->
    <h3>Harga total: Rp.<?php echo $totalPayment ?>K</h3>
  </div>
</body>
</html>