<?php 
require_once $hint.'app/models/database.php';
class Category extends database{

	const TABLE_NAME = 'categories';
	public function getListCase(){
		$sql = "select * from " . self::TABLE_NAME;
		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}

	public function getCategoryByName($name){
		$sql = "select * from ". self::TABLE_NAME . " Where Name = '$name'";
		$this->setQuery($sql);
		$this->execute();
		return $this->loadRow();
	}
	public function getCateById($id){
		$sql = "select * from " . self::TABLE_NAME . " Where ID = '$id'";
		$this->setQuery($sql);
		$this->execute();
		return $this->loadRow();
	}

	public function getCateByParentId($Parent_id){
		$sql = "select * from categories Where Parent_id = '$Parent_id'";
		// var_dump($sql);die;
		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}

	public function insert($name,$discription,$parent_id){
		$sql ='insert into categories (Name,Description,Parent_id)'
				.'values'
				.' ("'.$name.'","'.$discription.'","'.$parent_id.'")';
				// var_dump($sql);die;
		try{
			$this->setQuery($sql);
			$this->execute();
			return true;

		}catch(Excreption $ex){
			echo $ex->getMessage();
			return false;
		}
	}

	public function update_cate($id){
		$sql ="UPDATE categories SET 
		Name= '$this->Name',
		Description= '$this->Description',
		Parent_id = '$this->Parent_id'
		 WHERE ID = $id";
				// var_dump($sql);die;
		try{
			$this->setQuery($sql);
			$this->execute();
			return true;

		}catch(Excreption $ex){
			echo $ex->getMessage();
			return false;
		}
	}

	public function remove($id){
		$sql = "DELETE FROM ". self::TABLE_NAME . " WHERE ID = $id";
		// var_dump($sql);die;
		$this->setQuery($sql);
		$this->execute();
	}

 
	public function getSubmenu($parent_id) {
		$list = $this->getCateByParentId();
		if ($list->num_rows > 0) {
			echo '<ul>';
			while ( $obj = $list->fetch_object() ) {
				echo '<li><a href="#" >' . $obj->name . '</a>';
				getSubmenu($obj->menu_id);
				echo '</li>';
			}
			echo '</ul>';
		}
	}


	

}

 ?>