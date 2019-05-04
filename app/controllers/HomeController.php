<?php 
session_start();
require_once $hint.'app/models/Categories.php';
require_once $hint.'app/models/Product.php';
require_once $hint."app/models/Blog_M.php";
require_once $hint."app/models/User.php";

require_once 'Pager.php';
	class HomeController{
		public function homepage(){
			// Lấy danh sách danh mục trong cơ sở dữ liệu
			$model = new Category();
			$cateList = $model->getListCase();
			// var_dump($cateList);

			// var_dump('HomeController::homepage');die;
			// Lấy danh sách danh mục cha trong cơ sở dữ liệu
			$cateParent = new Category();
			$listCateParent = $cateParent->getCateByParentId('0');
			// var_dump($listCateParent);die;
			// trả về View danh sách danh mục
			$proModel = new Product();
			$listProduct = $proModel->getProduct();

			$limit = 11;
			$count = count($listProduct);
			$newPage = new pager();
			$start = $newPage->findStart($limit);
			$count_pager=$newPage->findPages($count,$limit);
			$page = $_GET['page'];

			$list_page = $newPage->pageList($page,$count_pager);
			$listProduct = $proModel->getProductPageLimit($start,$limit);

			$limitPro = new Product();
			$limit_list	= $limitPro->getProductLimit("Hot","= 1",3);
			// var_dump($limit);
			$limitProStar = new Product();
			$limitStar	= $limitProStar->getProductLimit("Star",">=4",3);

			$blog = new Blog();
			$list_cate_blog = $blog->get_cate_blog();
			$slide = $blog->get_slide();
			// var_dump($slide);die;
			// $list_menu_blog = $blog->get_menu($list_cate_blog,0,"",null);
			// var_dump($list_menu_blog);die;

			$views = 'app/views/client/home/homepage.php';
			$title = 'Danh sách sản phẩm';
			include_once "app/views/layouts/main.php";
		}

		public function product($id,$name){
		$model = new Product();
		$product = $model->getListProductByCateId($id);
		// var_dump($product);die;
		$productList = $model->getProductById($id);
		$limit = 12;
		$count = count($product);
		$newPage = new pager();
		$start = $newPage->findStart($limit);
		$count_pager=$newPage->findPages($count,$limit);
		$page = $_GET['page'];

		$list_page = $newPage->next_Prev_idName($id,$page,$count_pager,$name);
		$product = $model->getProductPageLimit($start,$limit);
		// var_dump($productList);die;
		$limit_list	= $model->getProductLimit("Hot","= 1",3);
		$limitStar	= $model->getProductLimit("Star",">=4",3);


		$comment = new User();
		$commentUser = $comment->getCommentUser($id);
		$blog = new Blog();
		$list_cate_blog = $blog->get_cate_blog();
		$cateParent = new Category();
		$listCateParent = $cateParent->getCateByParentId('0');
		$cateList = $cateParent->getListCase();

		$title = $name;
		$views = 'app/views/client/v_products/list_product.php';
		include_once "app/views/layouts/main.php";
	}

	public function searchP($key){
		$model = new Product();
		$product = $model->searchProduct($key);

		
		// var_dump($product);die;
		// $productList = $model->getProductById($id);
		// $limit = 12;
		// $count = count($product);
		// $newPage = new pager();
		// $start = $newPage->findStart($limit);
		// $count_pager=$newPage->findPages($count,$limit);
		// $page = $_GET['page'];

		// $list_page = $newPage->next_Prev_idName($id,$page,$count_pager,$name);
		$list_page = "";
		// $product = $model->getProductPageLimit($start,$limit);
		// var_dump($productList);die;
		$limit_list	= $model->getProductLimit("Hot","= 1",3);
		$limitStar	= $model->getProductLimit("Star",">=4",3);


		// $comment = new User();
		// $commentUser = $comment->getCommentUser($id);
		$blog = new Blog();
		$list_cate_blog = $blog->get_cate_blog();
		$cateParent = new Category();
		$listCateParent = $cateParent->getCateByParentId('0');
		$cateList = $cateParent->getListCase();

		$title = "Tìm kiếm: ".$key;
		$views = 'app/views/client/v_products/list_product.php';
		include_once "app/views/layouts/main.php";
	}

	}

 ?>