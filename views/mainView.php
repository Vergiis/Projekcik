<?php 

include 'libs/View.php';

class mainView extends View{
    public function load() {
        $this->render('main');
    }
    public function error($message) {
        $this->set("errorMessage",$message);
        $this->render('error');
    }
    public function login($data) {
        $this->set("user_role",$data['user_role']);
        $this->set("user_name",$data['user_firstName']." ".$data['user_lastName']);
        $this->set("user_login",$data['user_login']);
        $this->set("user_id",$data['user_id']);
        $this->render('main');
    }
    public function myDevices($data) {
        $this->set("user_devices",$data);
    }
    public function myLicences($data) {
        $this->set("user_licences",$data);
    }
    public function myInvoices($data) {
        $this->set("user_invoices",$data);
    }
}
?>