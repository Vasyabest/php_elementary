<?php

class PetShop
{
    private $pets = array();

    public function addPet($newPet)
    {
        $this->pets[] = $newPet;
    }

    public function getPets()
    {
        return $this->pets;
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








