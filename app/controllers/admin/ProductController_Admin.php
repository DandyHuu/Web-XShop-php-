<?php 
require_once $hint. 'app/controllers/admin/BaseController.php';
require_once $hint. 'app/controllers/Pager.php';
require_once $hint. 'app/models/Product.php';
require_once $hint. 'app/models/Categories.php';
class ProductController_Admin extends BaseController{
	function getProduct(){
		$pro = new Product();
		$list_product = $pro->getProduct();
		$limit = 12;
		$count = count($list_product);
		$newPage = new pager();
		$start = $newPage->findStart($limit);
		$count_pager=$newPage->findPages($count,$limit);
		$page = $_GET['page'];

		$list_page = $newPage->pageList($page,$count_pager);
		$list_product = $pro->getProductPageLimit($start,$limit);

		$view = "../app/views/admin/product/list-product.php";
		include_once '../app/views/layouts/admin.php';
	}

	function remove_product_id($id){
		$pro = new Product();
		$list_product = $pro->remove_pro($id);
		header("location: product-list.php");
	}

	function remove_comment($id){
		$pro = new Product();
		$list_product = $pro->remove_comment_id($id);
		header("location: index.php");
	}
	private function getSortedCateList(){
			$cateModel = new Category();
			$list = $cateModel->getListCase();
			$sortOrderList = $this->get_options($list, 0,"", null);
			// var_dump($sortOrderList);die;
			$cates = [];
			foreach ($sortOrderList as $key => $value) {
				$id = ltrim($key , 'x');
				for ($i=0; $i < count($list); $i++) { 
					if ($id == $list[$i]->ID) {
						$list[$i]->Name = $value;
						array_push($cates, $list[$i]);
						break;
						}
				}
			}
			return $cates;
		}

	public function addFormProduct(){
			$parent =$this->getSortedCateList();
			$title ="Thêm sản phẩm";
			
			$view = "../app/views/admin/product/add-form-product.php";
			include_once '../app/views/layouts/admin.php';
		}
	public function saveAddProduct(){
		$model = new Product();
		$model->Name = $_POST['Name']; 
		$model->List_price = $_POST['List_price']; 
		$model->Sell_price = $_POST['Sell_price']; 
		$model->Star = $_POST['Star']; 
		$model->Status = $_POST['Status']; 

		$file = $_FILES['image'];
		// var_dump($file);die;
		
		if($file['size'] > 0){
			$filename = "public/uploads/product/".uniqid() . "-" . $file['name'];
			move_uploaded_file($file['tmp_name'], "../".$filename);
			$model->Feature_image = $filename;
		}

		$model->Detail = $_POST['Detail']; 
		$model->Cate_id = $_POST['Cate_id']; 
		$model->Description = $_POST['Description']; 
		$model->Hot = $_POST['Hot']; 
		$model->Stock = $_POST['Stock'];

		$model->insert_product();
		header('location: product-list.php');
	}

	public function updateProduct(){
		$model = new Product();

		$model->ID = $_POST['ID']; 
		$model->Name = $_POST['Name']; 
		$model->List_price = $_POST['List_price']; 
		$model->Sell_price = $_POST['Sell_price']; 
		$model->Star = $_POST['Star']; 
		$model->Status = $_POST['Status']; 

		// $file = $_FILES['image'];
		// // var_dump($file);die;
		
		// if($file['size'] > 0){
		// 	$filename = "public/uploads/product/".uniqid() . "-" . $file['name'];
		// 	move_uploaded_file($file['tmp_name'], "../".$filename);
		// 	$model->Feature_image = $filename;
		// }
		$model->Feature_image = $_POST['Feature_image']; 
		$model->Detail = $_POST['Detail']; 
		$model->Cate_id = $_POST['Cate_id']; 
		$model->Description = $_POST['Description']; 
		$model->Hot = $_POST['Hot']; 
		$model->Stock = $_POST['Stock'];

		$model->update_product($model->ID);
		header('location: product-list.php');
	}
	public function editFormProduct(){
			$id = $_GET['id'];
			$model = new Category();
			$case = $model->getListCase();
			// var_dump($case);die;
			$product = new Product();
			$product_id = $product->get_product_id($id);
			// echo "<pre>";
			// var_dump($product_id);die;
			// if (!$case) {
			// 	header("location: index.php");
			// }
			$parent = $this->getSortedCateList();
			$title ="Cập nhật sản phẩm";
			$view = "../app/views/admin/product/edit-form-product.php";
			include_once '../app/views/layouts/admin.php';
		}




}
?>