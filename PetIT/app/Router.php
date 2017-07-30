<?php
class Router
{
    public $controllers = [];


    public function execute()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $parts = explode('/', trim($uri, '\\/'));

        list($module, $controller, $action) = array_replace([null, null, null], $parts);

        $module = $module ?: 'PetShopMVC';
        $controller = $controller ?: 'petShopIndex';
        $action = $action ?: 'getCats';
        
        if (!array_key_exists($controller, $this->controllers)) {
            $module = 'PetShopMVC';
            $controller = 'petShopIndex';
            $action = 'getCats';
        }
        
        $instance = new $this->controllers[$controller];
        
        if (!method_exists($instance, $action . 'Action')) {
            $module = 'PetShopMVC';
            $controller = 'petShopIndex';
            $action = 'getCats';
        }
        call_user_func([$instance, $action . 'Action']);
    }
}