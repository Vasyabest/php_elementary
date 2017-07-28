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
        $db = new ConnectionDataBaseSQL($this->host, $this->dbName, $this->user, $this->password);
        $petsDb = $db->selectAll($this->table);

        if(!empty($petsDb)){
            return $this->createObject($petsDb);
        }

    }

    private function createObject($petsDb)
    {
        $pets = [];
        foreach ($petsDb as $pet){
            if ($pet['kind'] === "cat"){
                $pets[] = new Cat($pet['id'], $pet['name'], $pet['price'], $pet['color'], $pet['fluffiness']);
            } elseif ($pet['kind'] === "dog"){
                $pets[] = new Dog($pet['id'], $pet['name'], $pet['price'], $pet['color']);
            } else {
                $pets[] = new Hamster($pet['id'], $pet['price'], $pet['color']);
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








