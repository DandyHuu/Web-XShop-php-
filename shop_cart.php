<?php 
$hint="";
require_once $hint.'app/controllers/ShopController.php';
$shopCtr = new Shop();
$list = $shopCtr->shop_list();


 ?>