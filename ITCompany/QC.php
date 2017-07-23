<?php

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
        $this->$salary;
    }

    public function getName()
    {
        return $this->name;
    }
}