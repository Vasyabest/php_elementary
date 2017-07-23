<?php


abstract class Recruiter
{
    public function getSpecialist($need, $candidates)
    {
        foreach ($candidates as $key => $candidate) {
            if ($candidate->getProfile() === $need) {
                return $candidate; 
            }
        }
    }
}