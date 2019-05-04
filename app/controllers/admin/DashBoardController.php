<?php 
require_once $hint.'app/models/Categories.php';
require_once $hint.'app/models/Product.php';
require_once $hint.'app/models/User.php';
require_once $hint.'app/models/Order.php';
require_once $hint.'app/controllers/Pager.php';
require_once $hint.'app/controllers/admin/BaseController.php';

class DashboardController{
	function index(){
		// lấy tổng sô danh mục
		$caseModel = new Category();
		// var_dump($caseModel->getListCase());die;
		$totalCase = count($caseModel->getCateByParentId(0));

		// lấy tổng sô sản phẩm
		$productModel = new Product();
		$totalProduct = count($productModel->getProduct());
		// Lấy tất cả số lượng người dùng
		$userModel = new User();
		$totalUser = count($userModel->getUser());

		$list_comment = $userModel->getCommentUserByProduct();
		$limit = 5;
		$count = count($list_comment);
		$newPage = new pager();
		$start = $newPage->findStart($limit);
		$count_pager=$newPage->findPages($count,$limit);
		$page = $_GET['page'];

		$list_page = $newPage->pageList($page,$count_pager);
		$list_comment = $userModel->getCommentUserPageLimit($start,$limit);

		// Lấy tất cả số lượng order
		$userOrder = new Orders();
		$totalOrder = count($userOrder->getOrder());




		$hint = "../";
		$view = $hint .'app/views/admin/dashboard.php';
		$title = "Dashboard";
		include_once $hint.'app/views/layouts/admin.php';
	}
}
 ?>