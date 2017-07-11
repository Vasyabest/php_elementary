<?php
require_once 'PetShop.php';
require_once 'Pet.php';
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Hamster.php';


$file = file_get_contents('../PetShopJson/pets.json', true);
$objectsPets = json_decode($file);

$petShop = new PetShop();

for ($i = 0; $i<count($objectsPets->cats); $i++){
    $petShop->addPet(new Cat($objectsPets->cats[$i]->name,$objectsPets->cats[$i]->color,$objectsPets->cats[$i]->price,$objectsPets->cats[$i]->fluffy));
}

for ($i = 0; $i<count($objectsPets->dogs); $i++){
    $petShop->addPet(new Dog($objectsPets->dogs[$i]->name,$objectsPets->dogs[$i]->color,$objectsPets->dogs[$i]->price));
}

for ($i = 0; $i<count($objectsPets->hamsters); $i++){
    $petShop->addPet(new Hamster($objectsPets->hamsters[$i]->color,$objectsPets->hamsters[$i]->price));
}

print_r($petShop->getCats());
echo "<br><br>";
print_r($petShop->getWhiteOrFluffyPets());
echo "<br><br>";
print_r($petShop->getExpensivePets());
echo "<br><br>";
?>