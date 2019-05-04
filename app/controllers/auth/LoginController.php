<?php 
	require_once 'app/models/database.php';

	class LoginController{

		function getLogin(){
			$title = "Đăng nhập";
			$view = "app/views/auth/login.php";
			include_once "app/views/layouts/main.php";
		}
	}

 ?>