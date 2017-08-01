<?php
class ITCompanyController
{
    private $view;
    private $ITCompany;
    private $candidates;
    private $dbName = 'it_company_db';
    private $user = 'root';
    private $password = 'admin';
    private $db;
    private $tableCandidate = 'candidates';

    public function __construct()
    {
        $this->db = new ConnectionDBSQL($this->dbName, $this->user, $this->password);

        $this->candidates = $this->initializeCandidates();
        $teams = $this->initializeTeams();

        $this->ITCompany = new ITCompany($teams, $this->candidates);
        $this->view = new View();
    }

    public function getTeamsBeforeHiring()
    {
        $teams = $this->ITCompany->getTeams();
        $data = array('teams'=>$teams);
        $this->view->render('ITCompany/views/teamMemberListTemplate.php', $data);
    }

    public function getTeamsAfterHiring()
    {
        foreach ($this->ITCompany->getTeams() as $team) {
            $this->ITCompany->hire($team);            
        }

        $teams = $this->ITCompany->getTeams();
        $data = array('teams'=>$teams);
        $this->view->render('ITCompany/views/teamMemberListTemplate.php', $data);
    }

    public function initializeCandidates()
    {
        $candidates = $this->db->selectAll($this->tableCandidate);

        $candidatesObj = [];
        foreach ($candidates as $candidate){
            $candidatesObj[] = new Candidate(
                $candidate['name'],
                $candidate['wantedSalary'],
                $candidate['profile']
            );
        }

        return $candidatesObj;
    }

    public function initializeTeams()
    {
        $teamsFromDB = $this->db->selectAll('teams');
        $teams = [];

        foreach ($teamsFromDB as $team) {
            $id_team = $team['id'];
            $needs = $this->initializeNeeds($id_team);
            $teamMembers = $this->initializeTeamMembers($id_team);

            $teams[] = new Team($team['name'], $team['project'], $teamMembers, $needs);
        }

        return $teams;
    }

    public function initializeNeeds($id_team)
    {
        $needs = $this->db->selectAll('needs', "`id_team` = '{$id_team}'");

        return $needs[0];
    }

    public function initializeTeamMembers($id_team)
    {
        $teamMembers = [];
        $specialists = $this->db->selectAll('team_members', "`id_team` = '{$id_team}'");

        foreach ($specialists as $specialist) {
            if($specialist['position'] === ProfileEnum::DEV){
                $teamMembers[] = new Dev($specialist['name'], $specialist['salary'], $id_team);
            } elseif ($specialist['position']=== ProfileEnum::PM) {
                $teamMembers[] = new PM($specialist['name'], $specialist['salary'], $id_team);
            } else {
                $teamMembers[] = new QC($specialist['name'], $specialist['salary'], $id_team);
            }
        }

        return $teamMembers;
    }
}