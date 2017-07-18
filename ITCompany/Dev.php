<?php
require_once 'HardWorker.php';

class Dev extends HardWorker
{
    protected $work = "Only warrior, only hardcore!";

    public function doWork()
    {
        return $this->work;
    }

    public function doITWork()
    {
        return true;
    }
}