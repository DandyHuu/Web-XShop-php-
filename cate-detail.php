<?php
$P_id = $_GET['id'];
require_once 'app/controllers/ProductController.php';
require_once 'app/controllers/HomeController.php';
$ctr = new ProductController();
$ctr->index($P_id);
// echo ($id);

 ?>
