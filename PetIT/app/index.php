<?php
spl_autoload_register(function ()
{
    require_once 'Router.php';
    require_once 'PetShopMVC/controllers/PetShopController.php';
    require_once 'PetShopMVC/models/petShop.php';
    require_once 'PetShopMVC/models/isFluffy.php';
    require_once 'PetShopMVC/models/Pet.php';
    require_once 'PetShopMVC/models/Cat.php';
    require_once 'PetShopMVC/models/Dog.php';
    require_once 'PetShopMVC/models/Hamster.php';
    require_once 'PetShopMVC/models/View.php';
    require_once 'PetShopMVC/models/ConnectionDBSQL.php';

    require_once 'ITCompany/controllers/ITCompanyController.php';
    require_once 'ITCompany/models/ITCompany.php';
    require_once 'ITCompany/models/Candidate.php';
//    require_once '../ITCompany/models/Dev.php';
//    require_once '../ITCompany/models/DevRecruiter.php';
//   require_once '../ITCompany/models/HardSpecialist.php';
    require_once 'ITCompany/models/HRTeam.php';
    require_once 'ITCompany/models/Person.php';
//    require_once '../ITCompany/models/PM.php';
//    require_once '../ITCompany/models/PMRecruiter.php';
//    require_once '../ITCompany/models/QCRecruiter.php';
//    require_once '../ITCompany/models/QC.php';
//    require_once '../ITCompany/models/Recruiter.php';
    require_once 'ITCompany/models/Team.php';
//    require_once '../ITCompany/models/Worker.php';
    require_once 'ProfileEnum.php';
});

$router = new Router();

$router->controllers['petShopController'] = 'PetShopController';
$router->controllers['ITCompanyController'] = 'ITCompanyController';

$router->execute();


