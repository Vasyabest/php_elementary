<?php
require_once "ITCompany.php";
//require_once "Person.php";
require_once "Team.php";
//require_once "Worker.php";
//require_once "HardWorker.php";
require_once "Candidate.php";
//require_once "Dev.php";
//require_once "HR.php";
//require_once "PM.php";
//require_once "QC.php";
//require_once "QCRecruiter.php";
require_once 'HRTeam.php';

$candidates = [];

$candidates[] = new Candidate('Vasya', 700, 'PM');
$candidates[] = new Candidate('Alex', 600, 'PM');
$candidates[] = new Candidate('Ira', 800, 'Dev');
$candidates[] = new Candidate('Borya', 500, 'Dev');
$candidates[] = new Candidate('Petya', 1000, 'Dev');
$candidates[] = new Candidate('Misha', 300, 'Dev');
$candidates[] = new Candidate('Serega', 900, 'Dev');
$candidates[] = new Candidate('Kolya', 200, 'Dev');
$candidates[] = new Candidate('Katya', 120, 'QC');
$candidates[] = new Candidate('Filya', 300, 'QC');

//$needs3 = {'DV':2};
$needs1 = ['Dev'=>4, 'PM'=>1, 'QC'=>1];
$needs2 = ['Dev'=>3, 'PM'=>1, 'QC'=>0];
$teamMembers = array('Dev'=>0, 'PM'=>0, 'QC'=>0);

$teamDnipro = new Team('Dnipro', 'AppleStore', $teamMembers, $needs1);
$teamKharkov = new Team('Kharkov', 'Amazon', $teamMembers, $needs2);
$teams = [$teamDnipro,$teamKharkov];

echo '<h1>Get all teams separately</h1>';
print_r($teamDnipro);
print_r($teamKharkov);

$ITCompanyRogaAndKopyta = new ITCompany($candidates, $teams);

echo '<h1>Get Candidates</h1>';
print_r($ITCompanyRogaAndKopyta->getCandidates());

//echo '<h1>Get Recruterss</h1>';
//print_r($ITCompanyRogaAndKopyta->getHRTeam()[0]);
echo '<h1>Get Candidates</h1>';
echo ($ITCompanyRogaAndKopyta->getTeams()[0]->countNeeds());
echo (!$ITCompanyRogaAndKopyta->getTeams()[0]->isComplete());

echo '<h1>Get Needs for team</h1>';
print_r ($ITCompanyRogaAndKopyta->getTeams()[0]->getNeeds());


echo '<h1>Get Candidates </h1>';
print_r( ($ITCompanyRogaAndKopyta->getCandidates()[0]->getProfile()));

echo '<h1>Get needs key-value</h1>';
$needs = $ITCompanyRogaAndKopyta->getTeams()[0]->getNeeds();
foreach ($needs as  $need=>$value) {

    echo $need;
    echo $value;
}
echo '<h1>Get needs words </h1>';
$keys = array_keys($ITCompanyRogaAndKopyta->getTeams()[0]->getNeeds());
foreach ($keys as $key){
    //if ($key === 'PM')

    echo $key;
}

echo '<h1>try get dev word</h1>';
$array = array_keys($ITCompanyRogaAndKopyta->getTeams()[0]->getNeeds());
//foreach ($keys as $key){
//    //if ($key === 'PM')


    echo $array;


echo $teamDnipro->countNeeds();

echo '<h1>canFindSpecialist</h1>';
//print_r($ITCompanyRogaAndKopyta->hrTeam->getHRCandidates()[0]->getProfile());

echo $ITCompanyRogaAndKopyta->hrTeam->canFindSpecialist("QC");

echo '<h1>canFindSpecialist</h1>';
print_r($ITCompanyRogaAndKopyta->hrTeam->getSpecialist('Dev'));