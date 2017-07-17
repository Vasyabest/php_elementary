<?php
require_once 'ITWorker.php';

class Candidate extends Person implements ITWorker
{
    protected $requiredSalary;
    protected $cv;

    public function __construct($name, $requiredSalary, $cv)
    {
        $this->name = $name;
        $this->requiredSalary = $requiredSalary;
        $this->cv = $cv;
    }

    public function doITWork()
    {
        return true;
    }
}