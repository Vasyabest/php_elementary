<?php
spl_autoload_register(function ()
{
    require_once 'models/Router.php';
    require_once 'controllers/IndexController.php';
    require_once 'models/PetShop.php';
    require_once 'models/isFluffy.php';
    require_once 'models/Pet.php';
    require_once 'models/Cat.php';
    require_once 'models/Dog.php';
    require_once 'models/Hamster.php';
    require_once 'models/View.php';
    require_once 'controllers/PetShopController.php';
});
$router = new Router();
//connect controllers
$router->controllers['index'] = new IndexController();
$router->controllers['whiteOrFluffy'] = new IndexController();
$router->controllers['expensive'] = new IndexController();
$router->execute();