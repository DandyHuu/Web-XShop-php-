<?php 
$hint = '../';
$name =	$_POST['name'];
$discription = $_POST['discription'];
$parent_id = $_POST['parent_id'];
require_once $hint . 'app/controllers/admin/CategoryController.php';
$ctr = new CategoryController();
$ctr->saveAdd($name,$discription,$parent_id);


 ?>