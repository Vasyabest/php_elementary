<?php
abstract class Pet
{
    public $price;
    public $color;
    public $type;

    abstract public function isFluffy();
    abstract public function getName();

    public function getPrice()
    {
        return $this->price;
    }

    public function isColor()
    {
        return $this->color;
    }
    
    public function getType()
    {
        return $this->type;
    }
    
    
    
}