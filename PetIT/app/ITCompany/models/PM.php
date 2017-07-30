<?php


class PM extends HardSpecialist
{
    public function doWork()
    {
        return "Im a best project pamager)))";
    }

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->position = ProfileEnum::PM;
        $this->salary = $salary;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getPosition () {
        return $this->position;
    }
    
    public function getSalary () {
        return $this->salary;
    }
}