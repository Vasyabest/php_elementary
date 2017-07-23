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
        $this->salary;
    }
    
    public function getName()
    {
        return $this->name;
    }
}