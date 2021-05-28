<?php
class Menu {

  // class public bisa diakses disemua class
  // class private adalah clas dinama bisa diakses hanya ke class yang sama
  // sedangkan jikalau protected bisa diakses ke sub class atau class anak

  // BARU 
  // ubah property name, price, dan image menjadi protected agar bisa diubah di sub class
  // atau class anak

  protected $name;
  protected $price;
  protected $image;
  protected $orderCount = 0;

  // penambahan property class public yang disebut $count dengan nilai awal 4
  // public static $count = 4;
  
  // Method Class menggunakan self dan private agar tidak bisa diakses diluar Class
  protected static $count = 0;


  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;

    // count menggunakan self
    self::$count++;
  }
  
  public function hello() {
    echo 'Saya adalah '.$this->name;
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function getImage() {
    return $this->image;
  }
  
  public function getOrderCount() {
    return $this->orderCount;
  }
  
  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }
  
  public function getTaxIncludedPrice() {
    return round($this->price * 1.0725, 2);
  }
  
  // Definisikan method getTotalPrice
  public function getTotalPrice() {
    return $this->getTaxIncludedPrice() * $this->orderCount;
  }
  
  // method class yang disebut getCount
  public static function getCount() {
    return self::$count;
  }
}
?>