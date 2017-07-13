<?php

class PM extends HardWorker
{
    protected $work = "Im organize working))";

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