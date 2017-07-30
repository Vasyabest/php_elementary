<?php

class PetShopController
{
    private $petShop;
    private $view;

    public function __construct()
    {
        $this->petShop = new PetShop();
        $this->view = new View();
    }

    public function getCats()
    {      
        $cats = $this->petShop->getCats();
        $data = array('cats'=>$cats);

        $this->view->render('/petShopMVC/views/catsTpl.php', $data);
    }

    public function getWhiteOrFluffy()
    {
        $whiteOrFluffy = $this->petShop->getWhiteOrFluffyPets();
        $data = array('whiteOrFluffy'=>$whiteOrFluffy);

        $this->view->render('/petShopMVC/views/whiteOrFluffyPetsTpl.php', $data);
    }

    public function getExpensive()
    {
        $expensivePets = $this->petShop->getExpensivePets();
        $data = array('expensivePets'=>$expensivePets);

        $this->view->render('/petShopMVC/views/expensivePetsTpl.php', $data);
    }
}