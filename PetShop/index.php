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
    require_once 'models/ConnectionDBSQL.php';
});

$router = new Router();
$router->controllers['index'] = 'IndexController';

$router->execute();


//$db = new ConnectionDBSQL("localhost", "pet_shop_db", "root", "");
//$petsDb = $db->selectAll("petsdb");
//
//var_dump($petsDb);

//$shop = new PetShop();
//var_dump($shop);