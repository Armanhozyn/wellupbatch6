<?php

class Calculator{
    public $num_one;
    public $num_two;
    public $num_three;

    public function __construct($num_one,$num_two,$num_three)
    {
        $this->num_one = $num_one;
        $this->num_two = $num_two;
        $this->num_three= $num_three;
    }


    public function add(){
        return  $this->num_one +  $this->num_two ;
    }

    public function subs(){
        return  $this->num_one -  $this->num_two ;
    }

    public function multi(){
        return  $this->num_one *  $this->num_two ;
    }

    public function divide(){
        return  $this->num_one /   $this->num_two ;
    }
}
