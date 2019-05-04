<?php 
$hint = "../";
require_once $hint . 'app/controllers/admin/ProductController_Admin.php';
$Ptr = new ProductController_Admin();
$Ptr->updateProduct();
 ?>