<?php
require_once 'ProfileEnum.php';
require_once 'PMRecruiter.php';
require_once 'DevRecruiter.php';
require_once 'QCRecruiter.php';

class HRTeam
{
    protected $recruiters;
    protected $candidates;

    public function __construct($ITCompany)
    {
        $this->candidates = $ITCompany->getCandidates();
        $this->recruiters = [
            ProfileEnum::PM => new PMRecruiter(),
            ProfileEnum::DEV=> new DevRecruiter(),
            ProfileEnum::QC=> new QCRecruiter()
        ];
    }

    public function canFindSpecialist($need)
    {
        foreach ($this->candidates as $candidate)
         {
             if ($candidate->getProfile() === $need) {

                 return true;
             }
        }
        
        return false;
    }

    public function getSpecialist($need)
    {
        $candidate = $this->recruiters[$need]->getSpecialist($need, $this->candidates);
        
        return $candidate;
    }
    
    public function getHRCandidates()
    {
        return $this->candidates;
    }



}