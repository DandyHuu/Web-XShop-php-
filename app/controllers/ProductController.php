<?php 
$hint = "";
require_once $hint."app/models/Product.php";
require_once $hint."app/models/User.php";
require_once $hint.'app/models/Categories.php';
require_once $hint."app/models/Blog_M.php";
class ProductController{

	public function index($P_id){
		$model = new Product();
		$product = $model->getListProductByCateId($P_id);

		$productList = $model->getProductById($P_id);
		// var_dump($productList);die;

		$productDetail = $model->getProductDetail($P_id);


		$comment = new User();
		$commentUser = $comment->getCommentUser($P_id);
		
		$blog = new Blog();
		$list_cate_blog = $blog->get_cate_blog();
		$cateParent = new Category();
		$listCateParent = $cateParent->getCateByParentId('0');

		$title = 'Sản phẩm';
		$views = 'app/views/client/v_products/detail_product.php';
		include_once "app/views/layouts/main.php";
	}

	
	


	public function save_comment(){
		$model = new User();
		$model->Product_id = $_POST['id']; 
		$model->C_name = $_POST['name']; 
		$model->Email = $_POST['email']; 
		$model->Star = $_POST['star']; 
		$model->Comment = $_POST['text']; 
		
		$model->saveComment();
		header('location:index.php');
	}



	
}

 ?>