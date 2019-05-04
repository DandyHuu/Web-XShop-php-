<?php 
session_start();
if(!isset($_SESSION['CART'])){
	header('location: index.php');
}else{
	$itemId = $_GET['itemId'];
	$quantity = $_GET['quantity'];
	$cartData = $_SESSION['CART'];
	$check = -1;
	// kiem tra san pham co trong gio hang hay khong
	// neu check = false thi khong co
	// neu check != false => check = so thu tu cua san pham trong gio hang
	for ($i=0; $i < count($cartData); $i++) { 
		if($itemId == $cartData[$i]['id']){
			$check = $i;
			break;
		}
	}
	// trường hợp sản phẩm chưa có trong giỏ hàng
	if($check != -1){
		if($quantity <= 0){
			array_splice($cartData, $check, 1);
		}else{
			// san pham da co trong gio hang
			$cartData[$check]['quantity'] = $quantity;
		}
		
	}
	$_SESSION['CART'] = $cartData;
}
header('location: shop_cart.php');
 ?>