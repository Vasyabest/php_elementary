<?php

abstract class FactoryAbstract
{
    protected $dolls = [];
    protected $cars = [];

    public function createToy($type)
    {
        switch ($type) {
            case'Doll':
                return  $this->dolls[] = new Doll();

            case'Car':
                return $this->cars[] = new Car();
        }
    }

    abstract public function getCars();
    abstract public function getDolls();
}