<?php 
require_once $hint.'app/models/database.php';
class Product extends database{

	public function getListProductByCateId($id){

		$sql = "select * from products Where cate_id = $id";

		$this->setQuery($sql);
		return $this->loadAllRows();

	}

	public function getProduct(){

		$sql = "select * from products";

		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}
	public function searchProduct($key){

		$sql = 'select * from products Where Name like "%'.$key.'%"';
		// echo($sql);
		// die;
		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}

	public function getProductPageLimit($vt,$limit){

		$sql = "select * from products limit $vt,$limit";

		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function getProductLimit($dk,$gt_dk,$limit){

		$sql = "select * from products WHERE $dk $gt_dk ORDER BY RAND() limit $limit";
			// echo $sql;die;
		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}

	public function getProductById($id){
		$sql = "select 
		*
		from products p 
		JOIN photos ph ON p.ID = ph.Pro_id
		where p.ID = $id";
				// var_dump($sql);die;
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function getProductItemById($id){
		$sql = "select 
		*
		from products p 
		where p.ID = $id";
				// var_dump($sql);die;
		$this->setQuery($sql);
		return $this->loadRow();
	}

	public function get_product_id($id){
		$sql = "select 
		*
		from products p 
		where p.ID = $id";
				// var_dump($sql);die;
		$this->setQuery($sql);
		return $this->loadRow();
	}

	public function getProductByName($name){
		$sql = "select 
		*
		from products p 
		JOIN photos ph ON p.ID = ph.Pro_id
		where p.Name = $name";
		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}


	public function getProductDetail($id){
		$sql = "select 
		*
		from product_detail  
		where Product_id = $id";
		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}

	public function insertProduct($Name, $List_price, $Sell_price, $Star, $Status, $Feature_image, $Detail, $Cate_id, $Description, $Hot, $Stock){
		$sql ='insert into categories (Name, List_price, Sell_price, Star, Status, Feature_image, Detail, Cate_id, Description, Hot, Stock)'
		.'values'
		.' ("'.$Name.'","'. $List_price.'","'. $Sell_price.'","'. $Star.'","'. $Status.'","'. $Feature_image.'","'. $Detail.'","'. $Cate_id.'","'. $Description.'","'. $Hot.'","'. $Stock.'")';
		var_dump($sql);die;
		try{
			$this->setQuery($sql);
			$this->execute();
			return true;

		}catch(Excreption $ex){
			echo $ex->getMessage();
			return false;
		}
	}

	function insert_product(){
		$sql = "insert into products (Name, List_price, Sell_price, Star, Status, Feature_image, Detail, Cate_id, Description, Hot, Stock) "
		." values "
		. " ('$this->Name', '$this->List_price', '$this->Sell_price', '$this->Star', '$this->Status', '$this->Feature_image', '$this->Detail', '$this->Cate_id', '$this->Description', '$this->Hot', '$this->Stock')";
		try{
			$this->setQuery($sql);
			$this->execute();
			return true;
		}catch(Exception $ex){
			echo $ex->getMessage();
			return false;
		}
	}

	function update_product($id){

		$sql = "UPDATE products SET 
		Name= '$this->Name' ,
		List_price= '$this->List_price' ,
		Sell_price= '$this->Sell_price' ,
		Star= '$this->Star' ,
		Status= '$this->Status' ,
		Feature_image= '$this->Feature_image' ,
		Detail= '$this->Detail' ,
		Cate_id= '$this->Cate_id' ,
		Description= '$this->Description' ,
		Hot= '$this->Hot' ,
		Stock= '$this->Stock' 
		 WHERE ID = $id";
		 // var_dump($sql);die;
		try{
			$this->setQuery($sql);
			$this->execute();
			return true;
		}catch(Exception $ex){
			echo $ex->getMessage();
			return false;
		}
	}

	public function remove_pro($id){
		$sql = "DELETE FROM products WHERE ID = $id";
		// var_dump($sql);die;
		$this->setQuery($sql);
		$this->execute();
	}

	public function remove_comment_id($id){
		$sql = "DELETE FROM comment WHERE ID = $id";
		// var_dump($sql);die;
		$this->setQuery($sql);
		$this->execute();
	}

}


?>
