<?php

class PetShop
{
    public function catsNumber()
    {
       
    }

    public function moreAvaragePrice()
    {
        
    }

    public function whiteOrFluffyPets()
    {

    }
}

abstract class Pet
{

    abstract protected function isFluffy();

    protected $price;
    protected $color;

    function __construct($price, $color)
    {
        $this->edible = $price;
        $this->color = $color;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getColor()
    {
        return $this->color;
    }

}

class Dog extends Pet
{

    private $name;

    public function isFluffy()
    {
        return $this->false;
    }

    public function getName()
    {
       return $this->name;
    }
}

class Cat extends Pet
{

    private $name;

    public function isFluffy()
    {
        return $this->true;
    }

    public function getName($name)
    {
        $this->name = $name;
    }

}

class Hamster extends Pet
{

    public function isFluffy()
    {
        return $this->true;
    }

    public function getName($name)
    {
        $this->name = $name;
    }
}

?>