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

    public function addNew(){
        $model=$this->loadModel('user'); 
        $model->add($_POST['user_Fname'],$_POST['user_Lname'],$_POST['user_pass'],$_POST['user_login'],$_POST['user_role']);
        
        $this->redirect("?");
    }
}

?>