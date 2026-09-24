<?php 

require __DIR__ . '/../../vendor/autoload.php';

abstract class Controller{
    protected function view(string $view){

        $path = __DIR__ . '/' . $view . '.php';

        if(!file_exists($path)){
            require __DIR__ . '/404.php';
            exit;
        }   

        require $path;
    }
}
class HomeController extends Controller{
    public function index(){
        $this->view('home'); 
    }
}

$controller = new HomeController();
$controller->index();