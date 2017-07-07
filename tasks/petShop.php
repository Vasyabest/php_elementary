<?php

class PetShop
{
    private $pets = [];

    protected function addPet($newPet)
    {
        $this->pets[] = $newPet;
    }


    public function getCats()
    {
       
    }

    public function getExpensivePets()
    {
        
    }

    public function getWhiteOrFluffyPets()
    {

    }
}

abstract class Pet
{
    protected $price;
    protected $color;

    abstract public function isFluffy();
    abstract public function isName();

    public function isPrice()
    {
        return $this->price;
    }

    public function isColor()
    {
        return $this->color;
    }
}

class Dog extends Pet
{

    private $name;

    public function __construct($name, $color, $price){
        $this->name = $name;
        $this->color = $color;
        $price->price = $price;
    }

    public function isFluffy()
    {
        return $this->false;
    }

    public function isName()
    {
        return $this->name;
    }



}

class Cat extends Pet
{

    private $name;

    public function __construct($name, $color, $price, $fluffy){
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->fluffy = $fluffy;
    }

    public function isFluffy()
    {
        return $this->fluffy;
    }

    public function isName()
    {
        return $this->name;
    }

}

class Hamster extends Pet
{
    public function __construct($color, $price){
        $this->color = $color;
        $this->price = $price;
    }

    public function isFluffy()
    {
        return $this->true;
    }

    public function isName()
    {
        return $this->false;
    }

}

?>


