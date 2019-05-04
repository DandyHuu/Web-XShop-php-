<?php 
$hint = "";
require_once $hint."app/models/User.php";
require_once $hint."app/controllers/ProductController.php";
// $Name = $_POST['name'];
// $Email = $_POST['email'];
// $Star = $_POST['star'];
// $Text = $_POST['text'];
$comment = new ProductController();
$comment->save_comment();


 ?>