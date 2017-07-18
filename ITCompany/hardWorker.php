<?php
require_once "ITWorker.php";
require_once 'Worker.php';

abstract class HardWorker extends Worker implements ITWorker
{
       public function doITWork()
    {
        return true;
    }
}