<?php

class ITCompany
{
    public $candidates = [];
    public $teams = [];
    protected $hrTeam = null;

    public function __construct(array $candidates, array $teams)
    {
        
        $this->candidates = $candidates;
        $this->teams = $teams;
       // $this->hrTeam = new HrTeam($this);
    }

    public function addCandidates($candidate)
    {
        $this->candidates[] = $candidate;
    }


    public  function getCandidates()
    {
        return $this->candidates;
    }

    public function addTeam($team)
    {
        $teams[] = $team;
    }

    public function getTeams()
    {
        return $this->teams;
    }

    public function hire(Team $team)
    {
        if (!$team->isComplete()) {
            $needs = $team->getNeeds();
            foreach ($needs as $key => $need) {
                
                }
            }
        }
    }
}