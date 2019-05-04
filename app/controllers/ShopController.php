<?php 
// session_start();
// var_dump($cartData);die;
require_once $hint.'app/models/Product.php';
require_once $hint."app/models/User.php";
require_once $hint.'app/models/Categories.php';
require_once $hint."app/models/Blog_M.php";
// require_once $hint.'app/controllers/product/add-product.php';
class Shop {

	public function shop_list(){
		session_start();
		$blog = new Blog();
		$list_cate_blog = $blog->get_cate_blog();
		$cateParent = new Category();
		$listCateParent = $cateParent->getCateByParentId('0');

		// echo "<pre>";
		// var_dump($_SESSION['cart']);
	$title = "Giỏ hàng";
	$views = "app/views/client/v_products/shop_v.php";
	include_once "app/views/layouts/main.php";
	}

	function addOrder(){
		session_start();
		$pro = new User();

		$pro->Customer_name = $_POST['name'];
		$pro->Phone = $_POST['phone'];
		$pro->Email = $_POST['email'];
		$pro->Customer_address = $_POST['address'];
		$pro->Notes = $_POST['note'];

		$pro->addToCustomer();

		$max_id =$pro->findMaxID();
		$id = $max_id->id;
		$id = (int)$id;

		$pro->Payment_method = 1;
		$pro->Total_price = $_POST['total'];

		// $time = date('Y-m-d H:i:s');
		
		// $pro->Order_date = $time;

		$pro->Customer_id = $id;
		// var_dump($pro->Customer_id);die;
		$kq = $pro->addToOrder();

		if ($kq == true) {
			$max_id_od = $pro->findMaxID_order();
			$id_od = $max_id_od->id_od;
			$id_od = (int)$id_od;
			$final = false;
			foreach ($_SESSION['CART'] as $item) {
				$pro->Order_id = $id_od;
				$pro->Product_id = $item['id'];
				$pro->Price = $item['price'];
				$pro->Quantity = $item['quantity'];
				// echo $item['price'];
				$final = $pro->addToOrder_detail();
			}
			// die;

			if ($final == true) {
				$mess = "Đặt hàng thành công";
				unset($_SESSION['CART']);
				// session_unset();
			}
			else {
				$mess = "Đặt hàng thất bại";
			}

			
		}


		header('location: shop_cart.php');

	}
}

 ?>