<?php
class ITCompanyController
{
    private $view;
    private $ITCompany;

    private $team;
    public $candidates;
    public $host = 'localhost';
    public $dbName = 'it_company_db';
    public $user = 'root';
    public $password = 'admin';
    public $db;
    public $tableCandidate = 'candidates';
    public $tableNeeds1 = 'needs1';
    public $tableNeeds2 = 'needs2';


    public function __construct()
    {
        $this->db = new ConnectionDBSQL($this->dbName, $this->user, $this->password);

        $this->candidates = $this->initializeCandidates();

        $teams = $this->initializeTeams();

        $this->ITCompany = new ITCompany($teams, $this->candidates);
        $this->view = new View();

       // $this->candidates = $this->getDataFromDB();
        //$this->team = $this->getTeamsFromDb();

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
        $teams = [];

        $needs1 = $this->initializeNeeds($this->tableNeeds1);
        $needs2 = $this->initializeNeeds($this->tableNeeds2);
        $teamMembersDnipro[] = new Dev('Irina', 1850);
        $teamMembersDnipro[] = new QC('Fedya', 500);
        $teamMembersKharkov[] = new PM('Sasha', 800);
        $teamMembersKharkov[] = new Dev('Vova',600);

        $teamDnipro = new Team('Dnipro', 'AppleStore', $teamMembersDnipro, $needs1);
        $teamKharkov = new Team('Kharkov', 'Amazon', $teamMembersKharkov, $needs2);
        $teams = [$teamDnipro,$teamKharkov];

        return $teams;
    }

    public function initializeNeeds($tableNeeds)
    {
        $needs = $this->db->selectAll($tableNeeds);
        return $needs[0];
    }

}