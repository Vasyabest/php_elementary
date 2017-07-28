<?php
require_once 'isFluffy.php';

class Hamster extends Pet
{
    use isFluffy;

    public function __construct($color, $price)
    {
        $this->color = $color;
        $this->price = $price;
        $this->type = 'hamster';
    }
    
    public function getName()
    {
        return false;
    }
}