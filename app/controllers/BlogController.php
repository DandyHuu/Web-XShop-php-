<?php 
$hint = "";
require_once $hint."app/models/Product.php";
require_once $hint."app/models/Blog_M.php";
require_once "Pager.php";
require_once $hint.'app/models/Categories.php';

class BlogController{

	public function getBlog($B_id){
		$id = $_GET['id'];
		$blog = new Blog();
		// lấy dữ liệu tin tức vs id
		$list_blog_id = $blog->get_list_blog($B_id);
		// var_dump($list_blog_id);
		// Tin tức hot
		$hot_blog = $blog->getBlogHotLimit($B_id,3);

		// lấy danh sách danh mục blog
		$list_cate_blog = $blog->get_cate_blog();

		$list_blog = $blog->get_blog();
		// var_dump($list_cate_blog);die;
		$limit = 3;
		$count = count($list_blog_id);
		// var_dump($count);die;
		$newPage = new pager();
		$start = $newPage->findStart($limit);

		// Tìm page hiện tại
		$page = $_GET['page'];
		// Tìm tổng số page
		$count_pager = $newPage->findPages($count,$limit);
		// var_dump($count_pager);die;
		if ($page > $count_pager){
            $page = $count_pager;
        }
        else if ($page < 1){
            $page = 1;
        }

		// echo "<hr>";

		$list_page_blog = $newPage->next_Prev_id($id,$page,$count_pager);
		// var_dump($list_page_blog);
		// echo "<hr>";
		// $list_blog = $blog->getBlogPageLimit($start,$limit);
		// var_dump($list_menu_blog);die;

		$list_blog_id = $blog->getBlogPageLimit($start,$limit);
		// var_dump($list_blog_id);die;


		// $list_menu_blog = $blog->get_cate_blog_id();
		// var_dump($list_blog);die;

		$cateParent = new Category();
		$listCateParent = $cateParent->getCateByParentId('0');
		$listCate = $cateParent->getListCase();

		$title = 'Tin tức';
		$views = "app/views/client/blog/blog.php";
		include_once "app/views/layouts/main.php";
	}
	public function getDetailBlog($id){

		$blog2 = new Blog();

		$list_blog_id = $blog2->get_list_blog($id);
		// var_dump($list_blog_id);die;

		$list_cate_blog = $blog2->get_cate_blog();
		
		$list_detail_blog = $blog2->get_detail_blog($id);
		// var_dump($list_detail_blog);die;

		$hot_blog = $blog2->getBlogHotLimit($id,3);

		// var_dump($hot_blog);die;

		// var_dump($list_menu_blog);die;
		$cateParent = new Category();
		$listCateParent = $cateParent->getCateByParentId('0');
		$listCate = $cateParent->getListCase();

		$title = 'Blog Detail';
		$views = "app/views/client/blog/blog_detail.php";
		include_once "app/views/layouts/main.php";
	}
}



 ?>