<?php 
$id=$_GET['id'];
$hint = "../";
require_once $hint .'app/controllers/admin/UserController.php';
$cate = new UserController();
$cate->remove_user($id);

 ?>