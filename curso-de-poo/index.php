<?php

require_once __DIR__ . '/vendor/autoload.php';

class HomeController extends BaseController{
    public function index(){
        return $this->view('home');
    }
}

class LoginController extends BaseController{
    public function index(){
        return $this->view('home');
    }
}
class BaseController{
     protected function view(string $view){
        return $view;
    }
}

$controller = new HomeController();
dd($controller->index()); 



