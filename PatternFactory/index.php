<?php

require_once "Toy.php";
require_once "Doll.php";
require_once "Car.php";
require_once "FactoryAbstract.php";
require_once "ArmorFactory.php";
require_once "WoodenFactory.php";

$woodFactory1 = new WoodenFactory();
$armorFactory1 = new ArmorFactory();

$doll1 = $woodFactory1->createToy("Doll");
$doll2 = $woodFactory1->createToy("Doll");
$doll3 = $armorFactory1->createToy("Doll");
$car1 = $armorFactory1->createToy("Car");
$car2 = $woodFactory1->createToy("Car");
$car3 = $woodFactory1->createToy("Car");
$car4 = $woodFactory1->createToy("Car");
$car5 = $woodFactory1->createToy("Car");

echo '<h1>Get class dall1</h1>';
echo $doll1->getClass();
echo '<h1>Get wood dalls</h1>';
print_r($woodFactory1->getDolls());


echo '<h1>Get armor dalls</h1>';
print_r($armorFactory1->getDolls());
echo '<h1>Get armor cars</h1>';
print_r($armorFactory1->getCars());
echo '<h1>Get wood cars</h1>';
print_r($woodFactory1->getCars());

echo '<h1>Get class car1</h1>';
echo $car1->getClass();
echo '<h1>Get class doll3</h1>';
echo $doll3->getClass();


$alenka = $woodFactory1->getDolls()[0];
echo '<h1>Get class alenka</h1>';
print_r($alenka->getClass());
