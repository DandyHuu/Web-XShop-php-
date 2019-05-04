<?php 
session_start();
$hint = "";
require_once 'app/models/Product.php';
$model = new Product();
$product = $model->getProductItemById($_GET['id']);
// echo "<pre>";
// var_dump($product);die;
if($product){
	$array_product = [
				'id' => $product->ID,
				'name' => $product->Name,
				'feature_image' => $product->Feature_image,
				'price' => $product->Sell_price,
				'quantity' => 1
			];
	// chưa tồn tại giỏ hàng => tạo ra giỏ hàng và thêm sản phẩm đầu tiên vào
	if(!isset($_SESSION['CART'])){
		$_SESSION['CART'] = [
			$array_product
		];
	}else{
		$cartData = $_SESSION['CART'];
		$check = -1;
		// kiem tra san pham co trong gio hang hay khong
		// neu check = false thi khong co
		// neu check != false => check = so thu tu cua san pham trong gio hang
		for ($i=0; $i < count($cartData); $i++) { 
			if($product->ID == $cartData[$i]['id']){
				$check = $i;
				break;
			}
		}
		// trường hợp sản phẩm chưa có trong giỏ hàng
		if($check == -1){
			array_push($cartData, $array_product);
		}else{
			// san pham da co trong gio hang
			$cartData[$check]['quantity']++;
		}
		$_SESSION['CART'] = $cartData;
		
	}
	// echo "<pre>";
	// 	var_dump($_SESSION['cart']);
}
header('location: index.php');
 ?>