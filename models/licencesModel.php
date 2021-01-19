<?php
include 'libs/Model.php';
 
class licencesModel extends Model{
 
    public function add($number,$name,$serial,$orderDate,$invoiceId,$suppExpireDate,$expireDate,$notes) {
        $userId=$_SESSION['activeUser']['user_id'];
        $q="INSERT INTO `licences` (`licence_number`, `licence_nameAndDesc`, `licence_serialKey`, `licence_orderDate`, `licence_invoiceId`, `licence_supportExpiryDate`, `licence_expiryDate`, `licence_userId`, `licence_notes`) VALUES ('".$number."', '".$number."', '".$serial."', '".$orderDate."', '".$invoiceId."', '".$suppExpireDate."', '".$expireDate."', '".$userId."', '".$notes."');";
        $this->insert($q);
    }
    
    public function getAll() {
        $userId=$_SESSION['activeUser']['user_id'];
        $userRole=$_SESSION['activeUser']['user_role'];
        if($userRole=="admin" || $userRole=="pracownik" || $userRole=="audytor"){
            $data=$this->select("SELECT * FROM `licences` JOIN users ON users.user_id=licences.licence_userId");
        }
        else{
            $data=$this->select("SELECT * FROM `licences` JOIN users ON users.user_id=licences.licence_userId WHERE licences.licence_userId='".$userId."'");
        }
        return $data;
    }

    public function getSearched($val,$type) {
        $userId=$_SESSION['activeUser']['user_id'];
        $data=$this->select("SELECT * FROM `licences` JOIN users ON users.user_id=licences.licence_userId WHERE licences.licence_userId='".$userId."' AND `".$type."`='".$val."'");
        return $data;
    }
}
?>