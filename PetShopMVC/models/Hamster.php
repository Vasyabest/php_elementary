<?php
require_once 'isFluffy.php';

class Hamster extends Pet
{
    use isFluffy;

    public function __construct($color, $price)
    {
        $this->color = $color;
        $this->price = $price;
        $this->type = 'humster';
    }
    
    public function getName()
    {
        return false;
    }
}