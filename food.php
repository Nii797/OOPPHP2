<?php

require_once('menu.php');

class Food extends Menu {
    // tambah private level kepedasan
    private $spicelevel;

    public function __construct($name, $price, $image, $spicelevel)
    {
        parent::__construct($name, $price, $image, $spicelevel);
        $this->spicelevel = $spicelevel;        
    }

    public function getSpice() 
    {
        return $this->spicelevel;
    }

}

?>