<?php 
require_once $hint. "app/models/Category.php";
class HomepageController{
	function index(){
		$cateModel = new Category();
		$listCate = $cateModel->getCateList();
		var_dump($listCate);
	}
}

 ?>