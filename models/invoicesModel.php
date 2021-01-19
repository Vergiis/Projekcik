<?php
include 'libs/Model.php';
 
class invoicesModel extends Model{
 
    public function add($file,$fileName,$type,$identifer,$clientId,$nettoVal,$vat,$bruttoVal,$currencyType,$convertedVal) {
        $userId=$_SESSION['activeUser']['user_id'];

        $info = pathinfo($fileName);
        $ext = $info['extension']; 
        $newname = $identifer.".".$ext; 
        
        $target = 'uploadedInvoices/'.$newname;
        move_uploaded_file($file, $target);

        $q="INSERT INTO `invoices` (`invoice_type`, `invoice_identifier`, `client_id`, `invoice_nettoValue`, `invoice_vat`, `invoite_bruttoValue`, `invoice_currencyType`, `invoice_convertedValue`,`user_id`,`detailsFile`) VALUES ('".$type."', '".$identifer."', '".$clientId."', '".$nettoVal."', '".$vat."', '".$bruttoVal."', '".$currencyType."', '".$convertedVal."', '".$userId."', '".$target."');";
        $this->insert($q);
  
    }
    
    public function getAll() {
        $userId=$_SESSION['activeUser']['user_id'];
        $userRole=$_SESSION['activeUser']['user_role'];
        if($userRole=="admin" || $userRole=="pracownik" || $userRole=="audytor"){
            $data=$this->select("SELECT * FROM `invoices` JOIN users ON users.user_id=invoices.user_id");
        }
        else{
            $data=$this->select("SELECT * FROM `invoices` JOIN users ON users.user_id=invoices.user_id WHERE invoices.user_id='".$userId."'");
        }
        return $data;
    }

    public function getSearched($val,$type) {
        $userId=$_SESSION['activeUser']['user_id'];
        $data=$this->select("SELECT * FROM `invoices` JOIN users ON users.user_id=invoices.user_id WHERE invoices.user_id='".$userId."' AND `".$type."`='".$val."'");
        return $data;
    }
}
?>