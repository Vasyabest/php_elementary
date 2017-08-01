<?php
require_once 'HardSpecialist.php';

abstract class Worker extends Person
{
    protected $position;
    protected $salary;
    protected $team;
}