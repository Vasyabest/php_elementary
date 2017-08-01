<?php
class Dog extends Pet
{
    use isFluffyTrait;

    protected $name;

    public function __construct($name, $color, $price)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->type = 'Dog';
    }
 
    public function getName()
    {
        return $this->name;
    }
}