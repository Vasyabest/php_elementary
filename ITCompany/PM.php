<?php

class PM extends HardWorker
{
    protected $work = "Im organize working))";

    public function doWork()
    {
        return $this->work;
    }

    public function doITWork()
    {
        return true;
    }
}