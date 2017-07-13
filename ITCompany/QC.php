<?php
class PM extends HardWorker
{
    protected $work = "Im best in testing))";

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