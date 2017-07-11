<?php

abstract class Worker extends Person
{
    protected $salary;
    protected $position;
    protected $team;

    public function getPosition(){
        return $this->position;
    }

    public function getTeam(){
        return $this->team;
    }
}