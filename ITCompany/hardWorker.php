<?php
require_once "ITWorker.php";

abstract class HardWorker extends Worker implements ITWorker
{
       public function doITWork()
    {
        return true;
    }
}