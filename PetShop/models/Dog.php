<?php
class Dog extends Pet
{
    use isFluffy;

    protected $name;

    public function __construct($name, $color, $price)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->type = 'dog';
    }
 
    public function getName()
    {
        return $this->name;
    }
}