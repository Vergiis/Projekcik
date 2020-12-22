<?php 
include 'libs/Controller.php';
include 'controllers/loginController.php';

class appController extends Controller{
    public function load(){
        if(isset($_GET['task']) && $_GET['task']=='login') {
            $ob = new loginController();
            $f=$_GET['action'];
            $ob->$f();
        }
        else{
            if(isset($_SESSION['activeUser'])){
                $view=$this->loadView('main');
                $view->login($_SESSION['activeUser']);
            }
            else{
                $view=$this->loadView('main');
                $view->load();
            }
        }
    }
}

?>