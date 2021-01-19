<?php 
class licencesController extends Controller{
    public function addNew(){
        $model=$this->loadModel('licences'); 
        $model->add($_POST['licence_number'],$_POST['licence_nameAndDesc'],$_POST['licence_serialKey'],$_POST['licence_orderDate'],$_POST['licence_invoiceId'],$_POST['licence_supportExpiryDate'],$_POST['licence_expiryDate'],$_POST['licence_notes']);
        
        $this->redirect("?task=myLicences&action=getAll");
    }

    public function getAll(){
        $model=$this->loadModel('licences'); 
        $data=$model->getAll();

        $view=$this->loadView('main');
        $view->myLicences($data);
        return $view;
    }

    public function getSearched(){
        $model=$this->loadModel('licences');

        $data=$model->getSearched($_POST['invoice_to_search'],$_POST['type']);
        
        $view=$this->loadView('main');
        $view->myLicences($data);
        return $view;
    }
}

?>