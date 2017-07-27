<?php
class Router
{
    public $controllers = [];


    public function execute()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $parts = explode('/', trim($uri, '\\/'));
        
        list($controller, $action) = array_replace([null, null], $parts);
        
        $controller = $controller ?: 'index';
        $action = $action ?: 'index';
        
        if (!array_key_exists($controller, $this->controllers)) {
            $controller = 'index';
            $action = 'index';
        }
        
        $instance = new $this->controllers[$controller];
        
        if (!method_exists($instance, $action . 'Action')) {
            $controller = 'index';
            $action = 'index';
        }
        call_user_func([$instance, $action . 'Action']);
    }
}