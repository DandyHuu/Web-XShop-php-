<?php 
$id=$_GET['id'];
$hint = "../";
require_once $hint .'app/controllers/admin/CategoryController.php';
$cate = new CategoryController();
$cate->remove($id);

 ?>

 