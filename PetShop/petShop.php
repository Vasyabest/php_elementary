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

        for ($i = 0; $i < count($this->pets); $i++){
            if (get_class($this->pets[$i]) == "Cat") {
                $cats[] = $this->pets[$i];
            }
        }
        
        return $cats;
    }

    protected function getAveragePrice()
    {
        $allPricesPets = 0;

        for ($i = 0; $i < count($this->pets); $i++) {
            $allPricesPets +=  $this->pets[$i]->getPrice();
        }
        $averagePricePets = $allPricesPets/count($this->pets);

        return $averagePricePets;
    }

    public function getExpensivePets()
    {
        $expensivePets = [];

        for ($i = 0; $i < count($this->pets); $i++) {
            if ($this->pets[$i]->getPrice() > $this->getAveragePrice()) {
                $expensivePets[] = $this->pets[$i];
            }
        }

        return $expensivePets;
    }

    public function getWhiteOrFluffyPets()
    {
        $fluffyOrWhite = [];

        for ($i = 0; $i < count($this->pets); $i++){
            if(($this->pets[$i]->isColor() == "White") || ($this->pets[$i]->isFluffy() === "true")){
                $fluffyOrWhite[] = $this->pets[$i];
            }
        }

        return $fluffyOrWhite;
    }
}

?>








