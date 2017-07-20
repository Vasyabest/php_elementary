<?php

abstract class Toy
{
    public function getClass()
    {
        return get_class($this);
    }
}