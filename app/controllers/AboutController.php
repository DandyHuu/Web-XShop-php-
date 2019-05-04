<?php 
$hint = "";
require_once $hint."app/models/Product.php";
require_once $hint."app/models/About.php";
require_once $hint."app/models/Categories.php";
require_once $hint."app/models/User.php";
require_once $hint."app/models/Blog_M.php";
class AboutController{

	function getAbout(){
		$model =new About();
		$list_about = $model->list_slide_about();

		$user = new User();
		$list_user = $user->getRootUser();
		$cateParent = new Category();
		$listCateParent = $cateParent->getCateByParentId('0');
		$blog = new Blog();
		$list_cate_blog = $blog->get_cate_blog();

		$title="Giới thiệu về chúng tôi";
		$views = "app/views/client/about/about.php";
		include_once "app/views/layouts/main.php";
	}
}



 ?>