<?php

class Team
{
    protected $name;
    protected $teamMembers = [];
    protected $project;
    protected $needs = [];

    public function __construct($name, $project, $teamMembers, $needs)
    {
        $this->name = $name;
        $this->project = $project;
        $this->teamMembers = $teamMembers;
        $this->needs = $needs;
    }

    public function isCompleete()
    {

    }

    public function getNeeds()
    {
        return $this->needs;
    }

    public function doJob()
    {
        return "Our team rules!";
    }

//    public function addNeeds()
//    {
//        
//    }

}