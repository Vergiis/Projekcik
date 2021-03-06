<?php
include 'libs/Model.php';
 
class devicesModel extends Model{
 
    public function add($code,$name,$serialNumber,$buyDate,$invoiceNumber,$expireDate,$nettoVal,$notes) {
        $userId=$_SESSION['activeUser']['user_id'];
        $q="INSERT INTO `devices` (`device_code`, `device_name`, `device_serialNumber`, `device_buyDate`, `device_invoiceId`, `device_warrantyExpiryDate`, `device_nettoValue`, `device_ownerId`, `device_notes`) VALUES ('".$code."', '".$name."', '".$serialNumber."', '".$buyDate."', '".$invoiceNumber."', '".$expireDate."', '".$nettoVal."', '".$userId."', '".$notes."')";
        $this->insert($q);
    }
    
    public function del($id) {
        $q="DELETE FROM `devices` WHERE `devices`.`device_id` = '".$id."'";
        $this->insert($q);
    }

    public function getAll() {
        $userId=$_SESSION['activeUser']['user_id'];
        $userRole=$_SESSION['activeUser']['user_role'];
        if($userRole=="admin" || $userRole=="pracownik" || $userRole=="audytor"){
            $data=$this->select("SELECT * FROM `devices` JOIN users ON users.user_id=devices.device_ownerId");
        }
        else{
            $data=$this->select("SELECT * FROM `devices` JOIN users ON users.user_id=devices.device_ownerId WHERE devices.device_ownerId='".$userId."'");
        }

        return $data;
    }

    public function getSearched($val,$type) {
        $userId=$_SESSION['activeUser']['user_id'];
        $data=$this->select("SELECT * FROM `devices` JOIN users ON users.user_id=devices.device_ownerId WHERE devices.device_ownerId='".$userId."' AND `".$type."`='".$val."'");
        return $data;
    }
}
?>