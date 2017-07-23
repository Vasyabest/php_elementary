<?php

class ITCompany
{
    protected $candidates = [];
    protected $teams = [];
    public $hrTeam = NULL;

    function __construct($candidates, $teams)
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
            //$needs = ($team->getNeeds());
            foreach ($needs as $need => $value) {
                if (($value > 0) && $this->hrTeam->canFindSpecialist($need)) {
                    

                }
            }

            
//            return "Team cant be completed";
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
}