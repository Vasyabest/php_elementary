<?php

class HR extends HardWorker
{
    protected $work = "Im looking for new workers))";

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