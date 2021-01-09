<?php
include 'libs/Model.php';
 
class devicesModel extends Model{
 
    public function add($code,$name,$serialNumber,$buyDate,$invoiceNumber,$expireDate,$nettoVal,$notes) {
        $userId=$_SESSION['activeUser']['user_id'];
        $q="INSERT INTO `devices` (`device_code`, `device_name`, `device_serialNumber`, `device_buyDate`, `device_invoiceId`, `device_warrantyExpiryDate`, `device_nettoValue`, `device_ownerId`, `device_notes`) VALUES ('".$code."', '".$name."', '".$serialNumber."', '".$buyDate."', '".$invoiceNumber."', '".$expireDate."', '".$nettoVal."', '".$userId."', '".$notes."')";
        $this->insert($q);
    }
    
    public function getAll() {
        $userId=$_SESSION['activeUser']['user_id'];
        $data=$this->select("SELECT * FROM `devices` WHERE `device_ownerId`='".$userId."'");
        
        return $data;
    }
}
?>