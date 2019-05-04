<?php 
require_once $hint.'app/models/database.php';
class Blog extends database{


	function get_list_blog($B_id){

		$sql = "select * from blog Where cate_blog_id = $B_id";
		$this->setQuery($sql);
		return $this->loadAllRows();


	}
	function get_detail_blog($B_id){

		$sql = "select * from blog b
				JOIN blog_detail bd ON b.ID = bd.ID
				JOIN cate_blog cb ON bd.Cate_blog = cb.ID
				 Where b.ID = $B_id";
		$this->setQuery($sql);
		return $this->loadAllRows();


	}
	function get_blog(){

		$sql = "select * from blog";
		$this->setQuery($sql);
		return $this->loadAllRows();


	}
	function get_slide(){

		$sql = "select * from slide WHERE Parent_id = 0";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function getBlogPageLimit($vt,$limit){

			$sql = "select * from blog limit $vt,$limit";

			$this->setQuery($sql);
			return $this->loadAllRows();
		}

	public function getBlogPageLimit_id($id,$vt,$limit){

		$sql = "select * from blog Where ID = $id limit $vt,$limit ";
		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}

	public function getBlogHotLimit($id,$limit){

		$sql = "select * from blog Where cate_blog_id = $id and Hot = 1 ORDER BY ID desc limit $limit ";

		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	function get_cate_blog(){
		$sql = "select * from cate_blog ";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function get_cate_blog_id($id){
		$sql = "select * from cate_blog	Where Parent_id = $id ";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	

}

 ?>