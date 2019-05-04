<?php 
require_once $hint.'app/models/database.php';
class Contrac extends database{

	function list_contrac(){
		$sql = "select * from contrac";
		$this->setQuery($sql);

		return $this->loadRow();

	}


}


 ?>