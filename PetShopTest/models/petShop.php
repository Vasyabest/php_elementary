<?php

class PetShop
{
    private $pets = [];



    public function __construct()
    {
        $this->pets = $this->getPets();
    }

    private function getPets()
    {
        $pets = [];

        $path = 'pets.json';
        $objPets = new PetShopController($path);
        
        $objectsPets = $objPets->getObjects($path);

        foreach ($objectsPets->cats as $cat) {
            $pets = new Cat($cat->name,
                            $cat->color,
                            $cat->price,
                            $cat->fluffy);
        }

        foreach ($objectsPets->dogs as $dog) {
            $pets = new Dog($dog->name,
                            $dog->color,
                            $dog->price);
        }

        foreach ($objectsPets->hamsters as $hamster) {
            $pets = new Hamster($hamster->color,
                                $hamster->price);
        }
        
        return $pets;
    }


    public function addPet($newPet)
    {
        $this->pets[] = $newPet;
    }



    public function getCats()
    {
        $cats = [];
        
        foreach ($this->pets as $pet) {
            if ($pet instanceof Cat) {
                $cats[] = $pet;
            }
        }
        
        return $cats;
    }

    protected function getAveragePrice()
    {
        $allPricesPets = 0;
        
        foreach ($this->pets as $pet) {
            $allPricesPets +=  $pet->getPrice();
        }
        $averagePricePets = $allPricesPets/count($this->pets);

        return $averagePricePets;
    }

    public function getExpensivePets()
    {
        $expensivePets = [];
        $averagePrice = $this->getAveragePrice();
        
        foreach ($this->pets as $pet) {
            if ($pet->getPrice() > $averagePrice) {
                $expensivePets[] = $pet;                
            }
        }

        return $expensivePets;
    }

    public function getWhiteOrFluffyPets()
    {
        $fluffyOrWhite = [];

//        for ($i = 0; $i < count($this->pets); $i++){
        foreach ($this->pets as $pet){
            if(($pet->isColor() == "White") || ($pet->isFluffy() == true)){
                $fluffyOrWhite[] = $pet;
            }
        }

        return $fluffyOrWhite;
    }
}








