<?php 
class loginController extends Controller{
    public function login(){
        $model=$this->loadModel('user');
        $user=$model->check($_POST['username'],$_POST['password']);
        if($user!=""){
            $_SESSION['activeUser']=$user;
            $view=$this->loadView('main');
            $view->login($user);
            $this->redirect("?");
        }
        else{
            $view=$this->loadView('main');
            $view->error("Wrong Login or Password");
            $view->load();
        }
    }

    public function logout(){
        unset($_SESSION['activeUser']);
        $this->redirect("?");
    }
}

?>