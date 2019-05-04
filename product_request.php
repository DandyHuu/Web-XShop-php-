<?php 
$hint = "";
$id = $_GET['id'];
$name = $_GET['name'];
require_once $hint.'app/controllers/HomeController.php';
$homeCtr = new HomeController();
$homeCtr->product($id,$name);
// HomeController::homepage();

 ?>
