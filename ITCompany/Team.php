<?php

class Team
{
    protected $teamName;
    protected $teamMembers = [];
    protected $needs = [];
    protected $project;

    function __construct($teamName, $project, $teamMembers, $needs)
    {
        $this->teamName = $teamName;
        $this->project = $project;
        $this->needs = $needs;
        $this->teamMembers = $teamMembers;
    }
    //return needs workers as array
    public function getNeeds()
    {
        return $this->needs;
    }
    
    public function getTeamName()
    {
        return $this->teamName;
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

    public function getWorkers(){
        return $this->teamMembers;
    }
    
    public function addTeamMember(Candidate $candidate)
    {
        $salary = $candidate->getRequiredSalary();
        $position = $candidate->getCv();
        $name = $candidate->getName();
        switch ($position) {
            case 'Dev':
                $newTeamMember = new Dev($name, $salary, $position, $this->teamName);
                array_push($this->teamMembers, $newTeamMember);
                break;
            case 'PM':
                $newTeamMember = new PM($name, $salary, $position, $this->teamName);
                array_push($this->teamMembers, $newTeamMember);
                break;
            case 'QC':
                $newTeamMember = new QC($name, $salary, $position, $this->teamName);
                array_push($this->teamMembers, $newTeamMember);
                break;
        }
    }


}
