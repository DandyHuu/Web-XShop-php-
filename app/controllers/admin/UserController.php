<?php 
require_once $hint. 'app/controllers/admin/BaseController.php';
require_once $hint. 'app/controllers/Pager.php';
require_once $hint."app/models/Product.php";
require_once $hint."app/models/User.php";
require_once $hint.'app/models/Categories.php';
require_once $hint."app/models/Blog_M.php";
class UserController{
	function getUser(){
		$user = new User();
		$listUser = $user->getUser();

		$limit = 4;
		$count = count($listUser);
		$newPage = new pager();
		$start = $newPage->findStart($limit);
		$count_pager=$newPage->findPages($count,$limit);
		$page = $_GET['page'];

		$list_page = $newPage->pageList($page,$count_pager);
		$listUser = $user->getUserPageLimit($start,$limit);

		$view = "../app/views/admin/user/list-user.php";
		include_once '../app/views/layouts/admin.php';
	}

	function remove_user($id){
		$user = new User();
		$listUser = $user->remove_user_id($id);
		header("location: user-list.php");
	}
}
 ?>