<?php
require_once 'isFluffy.php';

class Hamster extends Pet
{
    use isFluffyTrait;

    public function __construct($color, $price)
    {
        $this->color = $color;
        $this->price = $price;
        $this->type = 'Hamster';
    }
    
    public function getName()
    {
        return false;
    }
}