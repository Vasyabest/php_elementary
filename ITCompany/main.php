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
$candidates[] = new Candidate('Borya', 500, 'Dev');
$candidates[] = new Candidate('Petya', 1000, 'Dev');
$candidates[] = new Candidate('Misha', 300, 'Dev');
$candidates[] = new Candidate('Serega', 900, 'Dev');
$candidates[] = new Candidate('Kolya', 200, 'Dev');
$candidates[] = new Candidate('Katya', 1200, 'QC');



$needs1 = ['DV'=>3, 'PM'=>1, 'QC'=>1];
$needs2 = ['DV'=>2, 'PM'=>1, 'QC'=>0];
$teamMembers = array('DV'=>0, 'PM'=>0, 'QC'=>0);

$teamDnipro = new Team('Dnipro', 'AppleStore', $teamMembers, $needs1);
$teamKharkov = new Team('Kharkov', 'Amazon', $teamMembers, $needs2);
$teams = [$teamDnipro,$teamKharkov];

echo '<h1>Get all teams separately</h1>';
print_r($teamDnipro);
print_r($teamKharkov);

$ITCompanyRogaAndKopyta = new ITCompany($candidates, $teams);

echo '<h1>Get Candidates</h1>';
print_r($ITCompanyRogaAndKopyta->getCandidates());
