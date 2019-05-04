<?php 
// session_start();  
$hint = "../";
require_once $hint .'app/controllers/admin/DashboardController.php';
if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
  if ($_SESSION['auth']['role'] < 2) {
    header('location: ../index.php');
  }
    header('location: ../login.php');
 }

// echo "Đăng nhập thành công, chào bạn <strong>" 
//           . $_SESSION['auth']['name'] . "</strong>";


$ctr = new DashboardController();
$ctr->index();
 ?>
 <a href="../logout.php">về logout</a>