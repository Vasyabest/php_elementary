<?php
class Cat extends Pet
{
    protected $name;
    protected $fluffy;

    public function __construct($name, $color, $price, $fluffy)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->fluffy = $fluffy;
    }

    public function isFluffy()
    {
        return $this->fluffy;
    }

    public function getName()
    {
        return $this->name;
    }
}