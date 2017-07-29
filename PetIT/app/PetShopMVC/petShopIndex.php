<?php
spl_autoload_register(function ()
{
    require_once 'models/Router.php';
    require_once 'controllers/PetShopController.php';
    require_once 'models/petShop.php';
    require_once 'models/isFluffy.php';
    require_once 'models/Pet.php';
    require_once 'models/Cat.php';
    require_once 'models/Dog.php';
    require_once 'models/Hamster.php';
    require_once 'models/View.php';
    require_once 'models/ConnectionDBSQL.php';
});

$router = new Router();

$router->controllers['petShopIndex'] = 'PetShopController';


$router->execute();


