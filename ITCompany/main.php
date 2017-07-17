<?php
require_once "ITCompany.php";
require_once "Person.php";
require_once "Team.php";
require_once "Worker.php";
require_once "HardWorker.php";
require_once "Candidate.php";
require_once "Dev.php";
require_once "HR.php";
require_once "PM.php";
//require_once "QC.php";
//require_once "QCRecruiter.php";
require_once 'HRTeam.php';

$candidate1 = new Candidate('Vasya', 700, 'PM');
$candidate2 = new Candidate('Alex', 600, 'PM');
$candidate3 = new Candidate('Borya', 500, 'Dev');
$candidate4 = new Candidate('Petya', 1000, 'Dev');
$candidate5 = new Candidate('Misha', 300, 'Dev');
$candidate6 = new Candidate('Serega', 900, 'Dev');
$candidate7 = new Candidate('Katya', 1200, 'QC');






echo '<h1>Add Candidates</h1>';
ITCompany::addCandidates($candidate1);
ITCompany::addCandidates($candidate2);
ITCompany::addCandidates($candidate3);
ITCompany::addCandidates($candidate4);
ITCompany::addCandidates($candidate5);
ITCompany::addCandidates($candidate6);
ITCompany::addCandidates($candidate7);

$candidates = ITCompany::getCandidates();
print_r($candidates);