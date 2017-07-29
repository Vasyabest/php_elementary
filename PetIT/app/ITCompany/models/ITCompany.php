<?php

class ITCompany
{
    protected $candidates = [];
    protected $teams = [];
    public $hrTeam = NULL;

    function __construct($teams, $candidates)
    {
        $this->candidates = $candidates;
        $this->teams = $teams;
        $this->hrTeam = new HRteam($this);
    }

    public function hire(Team $team)
    {


       // $this->team = $team;
        $needs = $team->getNeeds();
        if (!($team->isComplete())) {
            foreach ($needs as $need => $value) {
                while (($value > 0) && $this->hrTeam->canFindSpecialist($need)) {
                    $foundCandidate = $this->hrTeam->getSpecialist($need);
                    $team->addTeamMember($foundCandidate);
                    $this->hrTeam->deleteFromCandidates($foundCandidate);
                    $value--;
                }
            }
        }
        
        return "Team is complete!";
    }

    public function gotFun()
    {

    }


    public function getCandidates()
    {
        return $this->candidates;
    }
    
//    public function getHRTeam()
//    {
//        return $this->hrTeam;
//    }

    public function getTeams()
    {
        return $this->teams;
    }
    
    public function addCandidate($name, $salary, $profile)
    {
        $this->candidates[] = new Candidate($name, $salary, $profile);
    }
    
    
}