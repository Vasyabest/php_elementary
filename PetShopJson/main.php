<?php
require_once 'PetShop.php';
require_once 'Pet.php';
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Hamster.php';
require_once 'FileController.php';

$path = 'pets.json';
$petShop = new PetShop();
//$objectsPets = new FileController($path);
$objectsPets = Controller($path);

foreach ($objectsPets->cats as $cat) {
    $petShop->addPet(new Cat($cat->name,
                             $cat->color,
                             $cat->price,
                             $cat->fluffy));
}

foreach ($objectsPets->dogs as $dog) {
    $petShop->addPet(new Dog($dog->name,
                             $dog->color,
                             $dog->price));
}

foreach ($objectsPets->hamsters as $hamster) {
    $petShop->addPet(new Hamster($hamster->color,
                                 $hamster->price));
}

//echo($petShop->getCats());
//echo "<br><br>";
//print_r($petShop->getWhiteOrFluffyPets());
//echo var_dump($petShop->getWhiteOrFluffyPets());
//echo "<br><br>";
//print_r($petShop->getExpensivePets());
//echo "<br><br>";

//print_r($objectsPets);