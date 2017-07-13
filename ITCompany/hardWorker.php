<?php

abstract class HardWorker extends Worker
{
    abstract public function doWork();
}