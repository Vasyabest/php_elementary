<?php

class Candidate
{
    protected $wantedSalary;
    protected $profile;
    protected $experience;

    function __construct($wantedSalary, $profile, $experience)
    {
        $this->wantedSalary = $wantedSalary;
        $this->profile = $profile;
        $this->experience = $experience;
    }
}