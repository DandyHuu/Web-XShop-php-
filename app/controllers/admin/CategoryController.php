<?php 
require_once $hint. 'app/controllers/admin/BaseController.php';
require_once $hint. 'app/models/Categories.php';
class CategoryController extends BaseController{
		// const TABLE_NAME = "";
		private $viewhint = '../app/views/admin/category/' ;

		public function index(){
			
			// var_dump($cates);die;
			$cates = $this->getSortedCateList();
			$title = "Danh sách danh mục";
			$view = $this->viewhint.'list.php';
			include_once $this->layoutView;
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

		public function addForm(){
			$parent =$this->getSortedCateList();
			$title ="Thêm danh mục";
			$view= $this->viewhint."add-form.php";
			include_once $this->layoutView;
		}
		public function editForm(){
			$id = $_GET['id'];
			$model = new Category();

			$case = $model->getCateById($id);
			if (!$case) {
				header("location: index.php");
			}


			$parent =$this->getSortedCateList($case->ID);
			$title ="Sửa danh mục";
			$view= $this->viewhint."edit-form.php";
			include_once $this->layoutView;
		}

		public function update_cate_id(){
			$model = new Category();
			$model->ID=$_POST['id'];
			 $model->Name = $_POST['name'];
			 $model->Description = $_POST['Description'];
			$model->Parent_id = $_POST['parent_id'];
			$model->update_cate($model->ID);
			header("location: category-list.php");
		}


		public function saveAdd($name,$discription,$parent_id){
			$model = new Category();
			$model->insert($name,$discription,$parent_id);
			header('location: category-list.php');
		}

		public function remove($id){
			$model = new Category();
			$remove_id= $model->remove($id);
			header("location: category-list.php");
		}
}


 ?>