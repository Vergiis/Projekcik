<?php 
class devicesController extends Controller{
    public function addNew(){
        $model=$this->loadModel('devices'); 
        $model->add($_POST['device_code'],$_POST['device_name'],$_POST['device_serialNumber'],$_POST['device_buyDate'],$_POST['device_invoiceId'],$_POST['device_warrantyExpiryDate'],$_POST['device_nettoValue'],$_POST['device_notes']);
        
        $this->redirect("?task=myDevices&action=getAll");
    }

    public function delDevices(){
        $model=$this->loadModel('devices'); 
        $model->del($_POST['details']);
        
        $this->redirect("?task=myDevices&action=getAll");
    }

    public function getAll(){
        $model=$this->loadModel('devices'); 
        $data=$model->getAll();

        $view=$this->loadView('main');
        $view->myDevices($data);
        return $view;
    }

    public function getSearched(){
        $model=$this->loadModel('devices');

        $data=$model->getSearched($_POST['invoice_to_search'],$_POST['type']);
        
        $view=$this->loadView('main');
        $view->myDevices($data);
        return $view;
    }
}

?>