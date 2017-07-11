<?php

class Candidate extends Person
{
    private $requiredSalary;
    private $profile = [];

    public function __construct($name, $requiredSalary, $profile)
    {
        $this->name = $name;
        $this->requiredSalary = $requiredSalary;
        $this->profile = $profile;
    }
}