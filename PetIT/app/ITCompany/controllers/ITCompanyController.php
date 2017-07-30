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

    public function __construct()
    {
        $this->db = new ConnectionDBSQL($this->dbName, $this->user, $this->password);

        $candidatesFromDB = $this->getDataFromDB();
        $this->candidates = $this->initializeCandidates($candidatesFromDB);

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


    public function getDataFromDB()
    {
        $candidates = $this->db->selectAll($this->tableCandidate);
        //var_dump($candidates);
        return  $candidates;
    }



    public function initializeCandidates($candidates)
    {
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

        $needs1 = ['Dev'=>2, 'PM'=>1, 'QC'=>1];
        $needs2 = ['Dev'=>3, 'PM'=>1, 'QC'=>0];
        $teamMembersDnipro[] = new Dev('Irina', 1850);
        $teamMembersDnipro[] = new QC('Fedya', 500);
        $teamMembersKharkov[] = new PM('Sasha', 800);
        $teamMembersKharkov[] = new Dev('Vova',600);

        $teamDnipro = new Team('Dnipro', 'AppleStore', $teamMembersDnipro, $needs1);
        $teamKharkov = new Team('Kharkov', 'Amazon', $teamMembersKharkov, $needs2);
        $teams = [$teamDnipro,$teamKharkov];

        return $teams;
    }
}