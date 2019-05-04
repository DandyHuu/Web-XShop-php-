<?php 
$id=$_GET['id'];
$hint = "../";
require_once $hint .'app/controllers/admin/ProductController_Admin.php';
$cate = new ProductController_Admin();
$cate->remove_product_id($id);

 ?>