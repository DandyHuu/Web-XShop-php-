<?php 
$hint = '../';
require_once $hint .'app/controllers/admin/UserController.php';
$ctr = new UserController();
$ctr->getUser();


 ?>