<?php 
session_start();
$id = $_GET['pId'];

$products = $_SESSION['CART'];
for ($i=0; $i < count($products) ; $i++) { 
	$count = $products[$i];

	if ($count['id'] == $id ) {
		array_splice($products, $i ,1 );
	}
	$_SESSION['CART']= $products;
}
header('location: shop_cart.php');



 ?>