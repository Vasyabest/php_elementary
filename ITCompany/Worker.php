<?php

abstract class Worker extends Person
{
    protected $salary;
    protected $position;
    protected $teamName;

    public function __construct($name, $salary, $position, $teamName)
    {
        parent::__construct($name);
        $this->salary = $salary;
        $this->position = $position;
        $this->teamName = $teamName;
    }

    public function getSalary()
    {
        return $this->salary;
    }
    
    public function getPosition(){
        return $this->position;
    }

    public function getTeamName(){
        return $this->teamName;
    }
}