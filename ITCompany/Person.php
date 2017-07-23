<?php

require_once 'Worker.php';
abstract class Person
{
    protected $name;
    
    abstract public function getName();
}