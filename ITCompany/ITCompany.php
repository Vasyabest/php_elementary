<?php

class ITCompany
{
    protected $candidates = [];
    protected $teams = [];
    protected $hrTeam = NULL;

    function __construct($candidates, $teams)
    {
        $this->candidates = $candidates;
        $this->teams = $teams;
        $this->hrTeam = new HRteam($this);
    }

    public function hire()
    {

    }

    public function gotFun()
    {

    }

    public function getCandidates()
    {
        return $this->candidates;
    }

}