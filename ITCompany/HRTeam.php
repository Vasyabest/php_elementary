<?php
require_once 'ProfileEnum.php';
require_once 'PMRecruiter.php';
require_once 'DVRecruiter.php';
require_once 'QCRecruiter.php';

class HRTeam
{
    protected $recruters;
    protected $candidates;

    public function __construct($candidates)
    {
        $this->candidates = $candidates;
        $this->recruiters = [
            ProfileEnum::PM => new PMRecruiter(),
            ProfileEnum::Dev=> new DVRecruiter(),
            ProfileEnum::QC=> new QCRecruiter()
        ];
    }

    public function canFindSpecialist()
    {

    }

    public function getSpecialist()
    {
        
    }



}