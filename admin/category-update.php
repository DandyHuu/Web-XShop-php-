<?php 
$hint = "../";
require_once $hint . 'app/controllers/admin/CategoryController.php';
$Ptr = new CategoryController();
$Ptr->update_cate_id();
 ?>