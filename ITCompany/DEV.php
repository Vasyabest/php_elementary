<?php

class Dev extends HardSpecialist
{
    public function doWork()
    {
        return "Im a good coder)))";
    }
    
    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->position = ProfileEnum::DEV;
        $this->$salary;
    }

    public function getName()
    {
        return $this->name;
    }
}