<?php
class Dog extends Pet
{
    protected $name;

    public function __construct($name, $color, $price)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }

    public function isFluffy()
    {
        return false;
    }

    public function getName()
    {
        return $this->name;
    }
}
?>