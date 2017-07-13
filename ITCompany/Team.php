<?php

class Team
{
    protected $name;
    protected $teamMembers = [];
    protected $needs = [];
    protected $project;

    function __construct($name, $teamMembers, $needs, $project)
    {
        $this->name = $name;
        $this->project = $project;
        $this->needs = $needs;
        $this->teamMember = $teamMembers;
    }

}
?>