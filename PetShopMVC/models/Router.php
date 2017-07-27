<?php
class Router
{
    public $controllers = [];


    public function execute()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $parts = explode('/', trim($uri, '\\/'));
        
        list($controller, $action) = array_replace([null, null], $parts);
        
        $controller = $controller ?: 'pet';
        $action = $action ?: 'cats';
        
        if (!array_key_exists($controller, $this->controllers)) {
            $controller = 'pet';
            $action = 'cats';
        }
        
        $instance = $this->controllers[$controller];
        
        if (!method_exists($instance, $action . 'Action')) {
            $controller = 'pet';
            $action = 'cats';
        }
        call_user_func([$instance, $action . 'Action']);
    }
}