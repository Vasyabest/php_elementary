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

    public function countNeeds()
    {
        return  $this->getNeeds()['DV']+$this->getNeeds()['PM']+$this->getNeeds()['QC'];
    }

    public function isComplete()
    {
        if (count($this->countNeeds()) === 0){
            return true;
        }
        return false;
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