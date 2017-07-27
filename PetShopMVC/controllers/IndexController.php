<?php
class IndexController
{
    private $petShop;
    private $view;
    public function __construct()
    {
        $this->petShop = new PetShop();
        $this->view = new View();
    }
    public function indexAction()
    {
        $petShop = $this->petShop;
        $cats = $petShop->getCats();
        $data = array('cats'=>$cats);
        $view = $this->view;
        $view->render('/views/template.php', $data);
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