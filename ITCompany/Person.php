<?php

require_once 'Worker.php';
abstract class Person
{
    protected $name;
    
    public function getName()
    {
        return $this->name;
    }
}