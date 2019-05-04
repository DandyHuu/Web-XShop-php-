<?php 
$hint = "";
require_once $hint."app/models/Product.php";
require_once $hint."app/models/Categories.php";
require_once $hint."app/models/User.php";
require_once $hint."app/models/Blog_M.php";
require_once $hint."app/models/Contrac.php";
class ContracController{

	function getContrac(){
		$model =new Contrac();
		$list_about = $model->list_contrac();

		$user = new User();
		$list_user = $user->getRootUser();
		$cateParent = new Category();
		$listCateParent = $cateParent->getCateByParentId('0');
		$blog = new Blog();
		$list_cate_blog = $blog->get_cate_blog();

		$title = "Liên hệ";
		$views = "app/views/client/about/contrac.php";
		include_once "app/views/layouts/main.php";
	}
}


 ?>