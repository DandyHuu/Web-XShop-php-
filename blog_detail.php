<?php 
$id = $_GET['blog_id'];
require_once 'app/controllers/BlogController.php';
$blogctr = new BlogController();
$blogctr->getDetailBlog($id);
// echo ($id);

?>