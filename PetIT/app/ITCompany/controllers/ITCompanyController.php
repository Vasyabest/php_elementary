<?php
class ITCompanyController
{
    private $view;
    private $ITCompany;

    public function __construct()
    {
        $candidates = $this->initializeCandidates();
        $teams = $this->initializeTeams();
        $this->ITCompany = new ITCompany($teams, $candidates);
        $this->view = new View();
    }

    public function before()
    {
        foreach ($this->ITCompany->getTeams() as $team) {
            $data = array('team'=>$team);
            $this->view->render('/views/template.php', $data);
        }
    }

    public function after()
    {
        foreach ($this->ITCompany->getTeams() as $team) {
            $this->ITCompany->hire($team);
            $data = array('team'=>$team);
            $this->view->render('/views/template.php', $data);
        }
    }

    public function initializeCandidates()
    {
        $candidates = [];

        $candidates[] = new Candidate('Vasya', 700, 'PM');
        $candidates[] = new Candidate('Alex', 600, 'PM');
        $candidates[] = new Candidate('Tolik', 800, 'Dev');
        $candidates[] = new Candidate('Borya', 500, 'Dev');
        $candidates[] = new Candidate('Petya', 1000, 'Dev');
        $candidates[] = new Candidate('Misha', 300, 'Dev');
        $candidates[] = new Candidate('Serega', 900, 'Dev');
        $candidates[] = new Candidate('Kolya', 200, 'Dev');
        $candidates[] = new Candidate('Katya', 120, 'QC');
        $candidates[] = new Candidate('Filya', 300, 'QC');

        return $candidates;
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