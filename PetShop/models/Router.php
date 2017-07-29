<?php
class Router
{
    public $controllers = [];


    public function execute()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $parts = explode('/', trim($uri, '\\/'));
        
        list($controller, $action) = array_replace([null, null], $parts);
        
        $controller = $controller ?: 'petShopIndex';
        $action = $action ?: 'getCats';
        
        if (!array_key_exists($controller, $this->controllers)) {
            $controller = 'petShopIndex';
            $action = 'getCats';
        }
        
        $instance = new $this->controllers[$controller];
        
        if (!method_exists($instance, $action . 'Action')) {
            $controller = 'petShopIndex';
            $action = 'getCats';
        }
        call_user_func([$instance, $action . 'Action']);
    }
}