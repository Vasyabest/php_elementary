<?php

class ITCompany
{
    public static $candidates;
    public $teams = [];


    public static function addCandidates($candidate)
    {
        self::$candidates[] = $candidate;
    }


    public static function getCandidates()
    {
        return self::$candidates;
    }

}