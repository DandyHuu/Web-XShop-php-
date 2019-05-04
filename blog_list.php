<?php 
$B_id = $_GET['id'];
require_once 'app/controllers/BlogController.php';
$blogctr = new BlogController();
$blogctr->getBlog($B_id);
// echo ($id);

 ?>