<?php 
require_once $hint. 'app/controllers/admin/BaseController.php';
require_once $hint. 'app/models/Order.php';
class OrderController_Admin extends BaseController{
	function getOrder_Admin(){
		$pro = new Orders();
		$list_order = $pro->getOrder();
		$view = "../app/views/admin/order/list-order.php";
		include_once '../app/views/layouts/admin.php';
	}

	function remove_order_id($id){
		$order = new Orders();
		$list_order = $order->remove_order($id);
		header("location: order-list.php");
	}

	



}