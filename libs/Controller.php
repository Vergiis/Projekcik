<?php

abstract class Controller{
	public function redirect($url) {
        header("location: ".$url);
	}
	
	public function loadView($name, $path='views/') {
        $path=$path.$name.'View.php';
        $name=$name.'View';
        try {
            if(is_file($path)) {
                require $path;
                $ob=new $name();
            } else {
                throw new Exception('Can not open view '.$name.' in: '.$path);
            }
        }
        catch(Exception $e) {
            echo $e->getMessage();
            exit;
        }
        return $ob;
	}
	
	public function loadModel($name, $path='models/') {
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
}

?>