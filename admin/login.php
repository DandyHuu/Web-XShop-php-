<?php 
$hint = "../";
require_once $hint.'app/controllers/LoginController.php';
$ctr = new LoginController();



switch ($_SERVER['REQUEST_METHOD']) {
	case 'POST':
		$msg ="";

		$ctr->postLogin();
		break;
	
	default:
		$msg ="";

		$ctr->getLogin();
		break;
}

 ?>