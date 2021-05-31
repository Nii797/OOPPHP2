<!-- NEW class User-->
<?php 
// definisikan class User
class User {
    private $name;
    private $gender;

    // NEW
    // Deklarasikan property class private $count dengan 0 sebagai nilai awal
    private static $count = 0;

    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
        // Naikan property class $count dengan 1 atau 1++
        self::$count++;
       
        // tetapkan nilai property class $count ke property id
        $this->id = self::$count;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGender() 
    {
        return $this->gender;
    }
}

?>