<?php


trait isFluffyTrait 
{    
    public function isFluffy()
    {
        if (($this instanceof Cat)||($this instanceof Hamster)) {
            return true;
        } else {
            return false;
        }
    }
}