<?php 
require_once $hint.'app/models/database.php';

class Orders extends database{
	function getOrder(){
		$sql = "select * from orders od join customer ct on od.Customer_id = ct.ID";
		// var_dump($sql);die;
		$this->setQuery($sql);
		$this->execute();
		return $this->loadAllRows();
	}	

	public function remove_order($id){
		$sql = "DELETE FROM orders WHERE ID_order = $id";
		// var_dump($sql);die;
		$this->setQuery($sql);
		$this->execute();
	}

}


 ?>