<?php

class Dev extends HardWorker
{
    protected $work = "Only warrior, only hardcore!";

    public function __construct($name, $salary, $position, $team)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->team = $team;
    }

    public function doWork()
    {
        return $this->work;
    }
}