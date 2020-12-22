<?php
require 'controllers/appController.php';
session_start();
$con=new appController();
$con->load();
?>