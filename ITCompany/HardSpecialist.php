<?php
require_once "Dev.php";
require_once "QC.php";
require_once "PM.php";

abstract class HardSpecialist extends Worker
{
    abstract public function doWork(); 
}