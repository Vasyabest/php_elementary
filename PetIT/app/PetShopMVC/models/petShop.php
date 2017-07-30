<?php

class PetShop
{
    private $pets = [];
    private $table = 'petsdb';
    private $host = 'localhost';
    private $dbName = 'pet_shop_db';
    private $user = 'root';
    private $password = '';
    
    public function __construct()
    {
        $this->pets = $this->getPets();
    }

    private function getPets()
    {
        $db = new ConnectionDBSQL($this->dbName, $this->user, $this->password);
        $petsDb = $db->selectAll($this->table);

        if(!empty($petsDb)){
            return $this->createObject($petsDb);
        }

        return $petsDb;
    }

    private function createObject($petsDb)
    {
        $pets = [];

        foreach ($petsDb as $pet){
            if ($pet['type'] === "Cat"){
                $pets[] = new Cat($pet['name'], $pet['color'], $pet['price'], $pet['fluffy']);
            } elseif ($pet['type'] === "Dog"){
                $pets[] = new Dog($pet['name'],  $pet['color'], $pet['price']);
            } else {
                $pets[] = new Hamster($pet['color'], $pet['price']);
            }
        }

        return $pets;
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
        
        foreach ($this->pets as $pet){
            if(($pet->isColor() == "White") || ($pet->isFluffy() == true)){
                $fluffyOrWhite[] = $pet;
            }
        }

        return $fluffyOrWhite;
    }
}








