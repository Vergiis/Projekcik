<?php
abstract class Model{
    protected $pdo;

    public function  __construct() {
        try {
            require 'configs/dbConfig.php';
            $this->pdo=new PDO('mysql:host='.$host.';dbname='.$dbase, $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(DBException $e) {
            echo 'DB connect error: ' . $e->getMessage();
        }
    }

    public function loadModel($name, $path='model/') {
        $path=$path.$name.'Model.php';
        $name=$name.'Model';
        try {
            if(is_file($path)) {
                require $path;
                $ob=new $name();
            } else {
                throw new Exception('Can not open model '.$name.' in: '.$path);
            }
        }
        catch(Exception $e) {
            echo $e->getMessage();
            exit;
        }
        return $ob;
    }

    public function select($query) {
        $select=$this->pdo->query($query);
        $data=$select->fetchAll(PDO::FETCH_ASSOC);
        $select->closeCursor();
 
        return $data;
    }
}
?>