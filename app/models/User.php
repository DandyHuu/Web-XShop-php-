<?php 
require_once $hint.'app/models/database.php';

class User extends database{

	function getUserByEmail($email){
		$sql = "select * from Users WHERE Email = '$email'";
		// var_dump($sql);die;
		$this->setQuery($sql);
		$this->execute();
		return $this->loadRow();
	}	

	function getUser(){
		$sql = "select * from users ";
		// var_dump($sql);die;
		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}	
	public function getUserPageLimit($vt,$limit){

			$sql = "select * from users limit $vt,$limit";

			$this->setQuery($sql);
			return $this->loadAllRows();
		}

	function getRootUser(){
		$sql = "select * from users u 
				JOIN role r on r.User_id = u.Role
				WHERE role < 3
				order by RAND() asc limit 3";
		// var_dump($sql);die;
		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}	

	function getCommentUser($id){
		$sql = "select * from comment where Product_id = $id ORDER BY ID DESC limit 2 ";
		// var_dump($sql);die;
		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}	
	public function getCommentUserPageLimit($vt,$limit){

			$sql = "select * from comment ORDER BY ID DESC limit $vt,$limit";

			$this->setQuery($sql);
			return $this->loadAllRows();
		}

	function getCommentUserByProduct(){
		$sql = "select * from comment c
				JOIN products p on p.ID = c.Product_id
				ORDER BY c.ID DESC ";
		// var_dump($sql);die;
		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}	
	
	public function remove_user_id($id){
		$sql = "DELETE FROM users WHERE ID = $id";
		// var_dump($sql);die;
		$this->setQuery($sql);
		$this->execute();
	}

	public function saveComment(){
		$sql = "insert into comment (C_name,Star,Comment,Email,Product_id) "
		." values "
		. " ('$this->C_name','$this->Star','$this->Comment','$this->Email','$this->Product_id') ";

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

	public function addToCustomer(){

		$sql = "insert into customer ( Customer_name, Customer_address, Phone, Email) "
		." values "
		. " ('$this->Customer_name', '$this->Customer_address', '$this->Phone', '$this->Email')";
		try{
			$this->setQuery($sql);
			$this->execute();
			return true;
		}catch(Exception $ex){
			echo $ex->getMessage();
			return false;
		}
	}

	public function addToOrder(){
		$sql = "insert into orders ( Customer_id, Payment_method, Notes, Total_price) "
		." values "
		. " ($this->Customer_id, '$this->Payment_method', '$this->Notes', '$this->Total_price')";

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

	public function addToOrder_detail(){
		$sql = "insert into order_details ( Order_id, Product_id, Quantity, Price) "
		." values "
		. " ($this->Order_id, '$this->Product_id', '$this->Quantity', '$this->Price')";

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

	function findMaxID(){
		$sql1 = "select MAX(ID) as id from customer";
		$this->setQuery($sql1);
		$this->execute();
		return $this->loadRow();
	}
	function findMaxID_order(){
		$sql1 = "select MAX(ID_order) as id_od from orders";
		$this->setQuery($sql1);
		$this->execute();
		return $this->loadRow();
	}
}

 ?>