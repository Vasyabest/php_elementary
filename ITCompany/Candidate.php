<?php

class Candidate
{
    protected $wantedSalary;
    protected $profile;
    
    function __construct($name, $wantedSalary, $profile)
    {
        $this->name = $name;
        $this->wantedSalary = $wantedSalary;
        $this->profile = $profile;

    }

    public function getWantedSalary()
    {
        return $this->wantedSalary;
    }
    
    public function getProfile()
    {
        return $this->profile;
    }
}