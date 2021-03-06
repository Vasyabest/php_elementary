<?php
require_once "models/ITCompany.php";
require_once "models/Person.php";
require_once "models/Team.php";
require_once "models/Candidate.php";
require_once 'models/HRTeam.php';

$needs1 = ['Dev'=>2, 'PM'=>1, 'QC'=>1];
$needs2 = ['Dev'=>3, 'PM'=>1, 'QC'=>0];
$teamMembersDnipro[] = new Dev('Irina', 1850);
$teamMembersDnipro[] = new QC('Fedya', 500);
$teamMembersKharkov[] = new PM('Sasha', 800);
$teamMembersKharkov[] = new Dev('Vova',600);

$teamDnipro = new Team('Dnipro', 'AppleStore', $teamMembersDnipro, $needs1);
$teamKharkov = new Team('Kharkov', 'Amazon', $teamMembersKharkov, $needs2);
$teams = [$teamDnipro,$teamKharkov];

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

$ITCompanyRogaAndKopyta = new ITCompany($teams, $candidates);

//$ITCompanyRogaAndKopyta->addCandidate('Vasya', 700, 'PM');
//$ITCompanyRogaAndKopyta->addCandidate('Alex', 600, 'PM');
//$ITCompanyRogaAndKopyta->addCandidate('Tolik', 800, 'Dev');
//$ITCompanyRogaAndKopyta->addCandidate('Borya', 500, 'Dev');
//$ITCompanyRogaAndKopyta->addCandidate('Petya', 1000, 'Dev');
//$ITCompanyRogaAndKopyta->addCandidate('Misha', 300, 'Dev');
//$ITCompanyRogaAndKopyta->addCandidate('Serega', 900, 'Dev');
//$ITCompanyRogaAndKopyta->addCandidate('Kolya', 200, 'Dev');
//$ITCompanyRogaAndKopyta->addCandidate('Katya', 120, 'QC');
//$ITCompanyRogaAndKopyta->addCandidate('Filya', 300, 'QC');

echo '<h1>Before</h1>';
echo '<h1>Dnipro team</h1>';
print_r($teamDnipro);
echo '<h1>Kharkov team</h1>';
print_r($teamKharkov);
echo '<h1>Candidates</h1>';
print_r($ITCompanyRogaAndKopyta->getCandidates());

//$ITCompanyRogaAndKopyta->hire($teamDnipro);

foreach ($ITCompanyRogaAndKopyta->getTeams() as $team) {
    $ITCompanyRogaAndKopyta->hire($team);
}

echo '<h1>After</h1>';
echo '<h1>Dnipro team</h1>';
print_r($teamDnipro);
echo '<h1>Kharkov team</h1>';
print_r($teamKharkov->getTeamMembers());
echo '<h1>Candidates</h1>';
print_r($ITCompanyRogaAndKopyta->hrTeam->getHRCandidates());

