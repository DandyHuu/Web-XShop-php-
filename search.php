<?php 
$hint = "";
$key = $_GET['keyw'];
 // $key = "over";
require_once 'app/controllers/HomeController.php';
$searchCtr = new HomeController();
if ($key != "") {
	$searchCtr->searchP($key);
}
else{
	$searchCtr->homepage();
}

// echo ($id);

 ?>