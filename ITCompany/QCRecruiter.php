<?php
require_once 'Recruiter.php';
require_once 'Candidate.php';

class QCRecruiter extends Recruiter
{
    public function getSpecialist($need, ItCompany $company)
    {
        $candidates = $company->getCandidates();
        foreach ($candidates as $key => $candidate) {
            if ($candidate->getCv() == 'QC') {
                 {
                   
                }
            }
        }
    }
}