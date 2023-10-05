<?php 

class Car{
    public $color;
    public $brand;
    
    public function __construct($clr,$brnd)
    {
        $this->color = $clr;
        $this->brand = $brnd;
    }


    public function drive(){
        return "Car Started Broom Broom";
    }
    

}

// Use of Object

$car = new Car('yellow','BMW');








