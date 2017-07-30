<?php
class Router
{
    public $controllers = [];


    public function execute()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $parts = explode('/', trim($uri, '\\/'));

        if ($uri === '/') {
            $controller = new $this->controllers['petShopController'];
            call_user_func([$controller, 'getCats']);
        } else {
            $module = $parts[1];
            $request = $parts[2];

            if ($module === 'petShop') {
                $controller = new $this->controllers['petShopController'];
                call_user_func([$controller, $request]);
            }

            if ($module === 'ITCompany') {
                $controller = new $this->controllers['ITCompanyController'];
                call_user_func([$controller, $request]);
            }
        }

    }
}