<?php 
$hint = '../';
require_once $hint .'app/controllers/admin/ProductController_Admin.php';
$ctr = new ProductController_Admin();
$ctr->getProduct();
 ?>