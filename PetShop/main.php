<?php
require_once 'PetShop.php';
require_once 'Pet.php';
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Hamster.php';

$petShop = new PetShop();

$petShop->addPet(new Cat('Grisha', 'Grey', 1000, true));
$petShop->addPet(new Cat('Gosha', 'Black', 500, true));
$petShop->addPet(new Dog('Barsik', 'White', 300));
$petShop->addPet(new Hamster('White', 700));
$petShop->addPet(new Cat('Lavrik', 'Red', 600, true));
$petShop->addPet(new Cat('Mikhail', 'White', 800, true));
$petShop->addPet(new Dog('Shpuntik', 'Grey', 100));
$petShop->addPet(new Dog('Balalaikin', 'Blue', 600));
$petShop->addPet(new Dog('Gazzaev', 'Purple', 200));
$petShop->addPet(new Hamster('Brown', 900));
$petShop->addPet(new Hamster('grey', 1100));
$petShop->addPet(new Cat('Boris', 'White', 750, true));

print_r($petShop->getCats());
print_r($petShop->getWhiteOrFluffyPets());
print_r($petShop->getExpensivePets());
?>