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

    public function getCatsAction()
    {
        $cats = $this->petShop->getCats();
        $data = array('cats'=>$cats);

        $this->view->render('/views/template.php', $data);
    }

    public function whiteOrFluffyAction()
    {
        $petShop = $this->petShop;
        $whiteOrFluffy = $petShop->getWhiteOrFluffyPets();
        $data = array('whiteOrFluffy'=>$whiteOrFluffy);
        
        $view = $this->view;
        $view->render('/views/whiteOrFluffy.php', $data);
    }

    public function expensiveAction()
    {
        $petShop = $this->petShop;
        $expensivePets = $petShop->getExpensivePets();
        $data = array('expensivePets'=>$expensivePets);

        $view = $this->view;
        $view->render('/views/expensive.php', $data);
    }
}