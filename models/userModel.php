<?php
include 'libs/Model.php';
 
class userModel extends Model{
 
    public function check($name,$pass) {
        $data=$this->select("SELECT * FROM `users` WHERE `user_login`='".$name."'");
        if(count($data)>0){
            $dbPassword = $data[0]['user_password'];
            $dbSalt = $data[0]['user_salt'];
            if($dbPassword==hash('sha256', $dbSalt.$pass)) return $data[0];
            else return "";
        }
        else return "";
    }
    
}
?>