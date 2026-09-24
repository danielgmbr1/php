<?php

require_once __DIR__ . '/../vendor/autoload.php';

abstract class BaseController{
     protected function view(string $view){
        return $view;
    }
}

class HomeController extends BaseController{

    public function index(){
        return $this->view('home');
    }
}

class LoginController extends BaseController{
    public $peraa = 'carlos';
    public $creator;
    protected function view(string $view){
        dump('view from LoginController');
        return $view;
    }
    public function index(): string{
        $this->view("teste");
        return "";
    }
}
$controller = new HomeController();
$loginController = new loginController();
dump($loginController->index());
dump($controller->index()); 



