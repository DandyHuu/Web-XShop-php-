<?php 
session_start();
require_once $hint.'app/models/User.php';
class LoginController{
	function getLogin(){
		$title = "Đăng nhập";
		include '../app/views/auth/login.php';
	}
	function postLogin(){
		$email = $_POST['email'];
		$password = $_POST['pass'];
		// lay du lieu trong bang users dua vao $email
		$model = new User();
		$user = $model->getUserByEmail($email);

		// var_dump($user->Role);die;
			// compare password trong csdl voi $password
		if($user && password_verify($password, $user->Password)){
			// neu dung tao session auth va dieu huong sang trang admin/index.php
			if ($user->Role<2) {
				$_SESSION['auth']['id'] = $user->ID;
				$_SESSION['auth']['name'] = $user->Name;
				$_SESSION['auth']['email'] = $user->Email;
				$_SESSION['auth']['role'] = $user->Role;
				
				header('location: ../admin/index.php');
			}
			else{
				$_SESSION['auth']['id'] = $user->ID;
				$_SESSION['auth']['name'] = $user->Name;
				$_SESSION['auth']['email'] = $user->Email;
				$_SESSION['auth']['role'] = $user->Role;
				
				header('location: ../index.php');
			}
		}
		// else if($user && password_verify($password, $user->Password) && $user->Role >=2){
		// 		$_SESSION['auth']['id'] = $user->ID;
		// 		$_SESSION['auth']['name'] = $user->Name;
		// 		$_SESSION['auth']['email'] = $user->Email;
		// 		$_SESSION['auth']['role'] = $user->Role;
				
		// 		header('location: ../../index.php');
		// }
		// neu sai hien thi lai view auth/login
		$title = "Đăng nhập";
		
		include_once '../app/views/auth/login.php';
		
	}
}
 ?>