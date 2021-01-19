<?php 
class invoicesController extends Controller{
    public function addNew(){
        $model=$this->loadModel('invoices'); 
        $model->add($_FILES['file']['tmp_name'],$_FILES['file']['name'],$_POST['invoice_type'],$_POST['invoice_identifier'],$_POST['client_vatId'],$_POST['invoice_nettoValue'],$_POST['invoice_vat'],$_POST['invoite_bruttoValue'],$_POST['invoice_currencyType'],$_POST['invoice_convertedValue']);
        
        $this->redirect("?");
    }

    public function getAll(){
        $model=$this->loadModel('invoices'); 
        $data=$model->getAll();

        $view=$this->loadView('main');
        $view->myInvoices($data);
        return $view;
    }

    public function getSearched(){
        $model=$this->loadModel('invoices');

        $data=$model->getSearched($_POST['invoice_to_search'],$_POST['type']);
        
        $view=$this->loadView('main');
        $view->myInvoices($data);
        return $view;
    }

    public function openInvoices(){
        $this->redirect($_POST['details']);
    }

    public function getStats(){
        $model=$this->loadModel('invoices'); 
        $data=$model->getAll();

        $view=$this->loadView('main');
        $view->myInvoices($data);
        return $view;
    }
}

?>