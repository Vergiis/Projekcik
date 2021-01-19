<?php
include 'libs/Model.php';
 
class userModel extends Model{
 
    public function check($name,$pass) {
        $data=$this->select("SELECT * FROM `users` WHERE `user_login`='".$name."'");
        if(count($data)>0){
            if($data[0]['user_password']==md5($pass)) return $data[0];
            else return "";
        }
        else return "";
    }
    
    public function add($fName,$lName,$pass,$login,$role) {
        $pass=md5($pass);
        $q="INSERT INTO `users` (`user_firstName`, `user_lastName`, `user_password`, `user_salt`, `user_role`, `user_login`) VALUES ('".$fName."', '".$lName."', '".$pass."', 'xxx', '".$role."', '".$login."');";
        $this->insert($q);
    }

}
?>