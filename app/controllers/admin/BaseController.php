<?php 
session_start();
class BaseController {
	protected $layoutView = '../app/views/layouts/admin.php';
	function __construct(){
		if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
			  if ($_SESSION['auth']['role'] < 2) {
			    header('location: ../index.php');
			  }
			    header('location: ../login.php');
			 }
		}

	protected function get_options($array, $parent=0, $indent="", $forget = null) {
      
      	// Return variable
	      $return = [];
	      for ($i=0; $i < count($array); $i++) {

	          $val = $array[$i];
	        	if($val->Parent_id == $parent && $val->ID != $forget) {
	          	$return["x".$val->ID] = $indent.$val->Name;
	          	$return = array_merge($return, $this->get_options($array, $val->ID, "--".$indent, $forget));
	          	}
	      }
	      return $return;
	  }
		  
}

 ?>