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
require_once "QC.php";
require_once 'HRTeam.php';

$candidate1 = new Candidate('Vasya', 500, 'PM');
$candidate2 = new Candidate('Alex', 500, 'PM');
$candidate3 = new Candidate('Borya', 500, 'Dev');
$candidate4 = new Candidate('Petya', 500, 'Dev');
$candidate5 = new Candidate('Misha', 500, 'Dev');
$candidate6 = new Candidate('Serega', 500, 'Dev');
$candidate7 = new Candidate('Katya', 500, 'QC');