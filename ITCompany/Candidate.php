<?php

class Candidate extends Person
{
    protected $requiredSalary;
    protected $cv;

    public function __construct($name, $requiredSalary, $cv)
    {
        $this->name = $name;
        $this->requiredSalary = $requiredSalary;
        $this->cv = $cv;
    }
}