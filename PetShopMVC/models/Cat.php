<?php
require_once 'isFluffy.php';

class Cat extends Pet
{
    use isFluffy;
    
    protected $name;
    protected $fluffy;

    public function __construct($name, $color, $price, $fluffy)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->fluffy = $fluffy;
        $this->type = 'cat';
    }
    
    public function getName()
    {
        return $this->name;
    }
}