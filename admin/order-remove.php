<?php 
$id=$_GET['id'];
$hint = "../";
require_once $hint .'app/controllers/admin/OrderController_Admin.php';
$cate = new OrderController_Admin();
$cate->remove_order_id($id);

 ?>