<?php
include 'libs/Model.php';
 
class invoicesModel extends Model{
 
    public function add($file,$fileName,$type,$identifer,$clientId,$nettoVal,$vat,$bruttoVal,$currencyType,$convertedVal) {
        $userId=$_SESSION['activeUser']['user_id'];
        $q="INSERT INTO `invoices` (`invoice_type`, `invoice_identifier`, `client_id`, `invoice_nettoValue`, `invoice_vat`, `invoite_bruttoValue`, `invoice_currencyType`, `invoice_convertedValue`) VALUES ('".$type."', '".$identifer."', '".$clientId."', '".$nettoVal."', '".$vat."', '".$bruttoVal."', '".$currencyType."', '".$convertedVal."');";
        $this->insert($q);

        $info = pathinfo($fileName);
        $ext = $info['extension']; 
        $newname = $identifer.".".$ext; 
        
        $target = 'uploadedInvoices/'.$newname;
        move_uploaded_file($file, $target);
    }
    
    public function getAll() {
        $userId=$_SESSION['activeUser']['user_id'];
        $data=$this->select("SELECT * FROM `devices` WHERE `device_ownerId`='".$userId."'");
        
        return $data;
    }
}
?>