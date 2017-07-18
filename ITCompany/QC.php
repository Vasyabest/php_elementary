<?php
require_once 'HardWorker.php';

class QC extends HardWorker
{
    protected $work = "Im best in testing))";
    
    public function doWork()
    {
        return $this->work;
    }

    public function doITWork()
    {
        return true;
    }
}