<?php
require_once 'ITWorker.php';
require_once 'Person.php';

class Candidate extends Person implements ITWorker
{
    protected $requiredSalary;
    protected $cv;

    public function __construct($name, $requiredSalary, $cv)
    {
        $this->requiredSalary = $requiredSalary;
        $this->cv = $cv;
        parent::__construct($name);
    }

    public function doITWork()
    {
        return true;
    }

    public function getRequiredSalary()
    {
        return $this->requiredSalary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCv()
    {
        return $this->cv;
    }
    
}