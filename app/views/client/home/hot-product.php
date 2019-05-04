<div class="widget">
			<div class="heading-title-alt text-left heading-border-bottom">
				<h6 class="text-uppercase">sản phẩm nổi bật</h6>
			</div>
			<ul class="widget-latest-post">
<?php foreach ($limit_list as $pro){
			echo '
					<li>
						<div class="thumb">';
			echo'
							<a href="cate-detail.php?id='.$pro->ID.'">
								<img src="public/uploads/product/'.$pro->Feature_image.'" alt="">
							</a>';
			echo'
						</div>
						<div class="w-desk">
							<a href="cate-detail.php?id='.$pro->ID.'">'.$pro->Name.'</a>
						<div class="price">'.$pro->Sell_price.'₫</div>
						<div class="product-rating">';
							for ($i=1; $i < 6; $i++) { 
								if ( $i <= $pro->Star) {
									echo '<i class="fa fa-star"></i>';
								}
								else{
									echo '<i class="fa fa-star-o"></i>';
								}
							}
			echo '		</div>
						<div class="product-cart">
							<a href="add-product.php?id='.$pro->ID.'"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
						</div>
					</div>
				</li>
			
			';

			
	}
?>
		</ul>
</div>