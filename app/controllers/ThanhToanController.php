<?php 
	
	/**
	 * 
	 */
	class ThanhToanController 
	{
		
		public function getThanhToan(){
			$title =  "Thanh toán";
			$view = 'app/views/client/v_products/thanhtoan.php';
			include_once "app/views/layouts/main.php";
		}
	}
 ?>