<?php 
require_once $hint.'app/models/database.php';
class About extends database{

	function list_slide_about(){
		$sql = "select * from slide";
		$this->setQuery($sql);

		return $this->loadRow();

	}


}

 ?>