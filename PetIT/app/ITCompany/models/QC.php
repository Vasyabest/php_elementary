<?php

//require_once 'HardSpecialist.php';

class QC extends HardSpecialist
{
    public function doWork()
    {
        return "Im a best tester ))";
    }

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->position = ProfileEnum::QC;
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