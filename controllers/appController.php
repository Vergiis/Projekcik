<?php 
include 'libs/Controller.php';
include 'controllers/loginController.php';
include 'controllers/devicesController.php';
include 'controllers/licencesController.php';
include 'controllers/invoicesController.php';

class appController extends Controller{
    public function load(){
        if(isset($_GET['task']) && $_GET['task']=='login') {
            $ob = new loginController();
            $f=$_GET['action'];
            $ob->$f();
        }
        else if(isset($_GET['task']) && $_GET['task']=='addDevices' && isset($_GET['action'])) {
            $ob = new devicesController();
            $f=$_GET['action'];
            $ob->$f();
        }
        else if(isset($_GET['task']) && $_GET['task']=='myDevices' && isset($_GET['action'])) {
            $ob = new devicesController();
            $f=$_GET['action'];
            $v=$ob->$f();
            $v->login($_SESSION['activeUser']);
        }
        else if(isset($_GET['task']) && $_GET['task']=='addLicences' && isset($_GET['action'])) {
            $ob = new licencesController();
            $f=$_GET['action'];
            $ob->$f();
        }
        else if(isset($_GET['task']) && $_GET['task']=='myLicences' && isset($_GET['action'])) {
            $ob = new licencesController();
            $f=$_GET['action'];
            $v=$ob->$f();
            $v->login($_SESSION['activeUser']);
        }
        else if(isset($_GET['task']) && $_GET['task']=='addInvoices' && isset($_GET['action'])) {
            $ob = new invoicesController();
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