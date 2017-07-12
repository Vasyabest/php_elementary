<?php
class Hamster extends Pet
{
    public function __construct($color, $price)
    {
        $this->color = $color;
        $this->price = $price;
    }

    public function isFluffy()
    {
        return true;
    }

    public function getName()
    {
        return false;
    }
}