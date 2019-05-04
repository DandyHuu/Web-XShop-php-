<?php 
$hint = '../';
require_once $hint .'app/controllers/admin/OrderController_Admin.php';
$order = new OrderController_Admin();
$list_order = $order->getOrder_Admin();
 ?>