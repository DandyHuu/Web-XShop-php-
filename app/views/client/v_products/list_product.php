<style>
    .product-grid ,.page-content{
        padding: 50px 0px;
    }
</style>

<section class="body-content ">

    <div class="page-content product-grid">
      <div class="container">
         <div class="row">

            <div class="col-md-3 ">
                <!--product category-->
                <div class="widget">
                    <div class="heading-title-alt text-left heading-border-bottom">
                        <h6 class="text-uppercase">Tất cả danh mục</h6>
                    </div>
                    <ul class="widget-category">
                       <?php foreach ($cateList as $value): ?>
                          <li><a href="product_request.php?name=<?=$value->Name ?>&id=<?=$value->ID ?>"><?= $value->Name ?></a>
                          </li>
                      <?php endforeach ?>

                  </ul>
              </div>
              <!--product category-->

              <!--price filter-->
              <div class="widget">
                <div class="heading-title-alt text-left heading-border-bottom">
                    <h6 class="text-uppercase">tìm kiếm theo giá</h6>
                </div>
                <form method="post" action="#">

                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <input type="text" name="price-from" id="price-from" class=" form-control" placeholder="Từ, ₫" maxlength="100">
                        </div>

                        <div class="col-xs-12 form-group">
                            <input type="text" name="price-to" id="price-to" class=" form-control" placeholder="Đến, ₫" maxlength="100">
                        </div>
                        <div class=" col-xs-12 form-group">
                            <button class="btn btn-small btn-dark-border  btn-transparent">tìm kiếm</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--price filter-->


            <!--Sản phẩm hot-->
            <?php 
            include_once 'app/views/client/home/hot-product.php';
            ?>	

            <!--Sản phẩm hot-->


            <!--Sản phẩm được đánh giá cao-->
            <?php 
            include_once 'app/views/client/home/star-product.php';
            ?>  
            <!--Sản phẩm được đánh giá cao-->

            <!--product tags-->
            <div class="widget">
                <div class="heading-title-alt text-left heading-border-bottom">
                    <h6 class="text-uppercase">sản phẩm khác</h6>
                </div>
                <div class="widget-tags">
                    <?php foreach ($cateList as $value): ?>
                        <a href="#"><?= $value->Name ?></a>
                    <?php endforeach ?>
                </div>
            </div>
            <!--product tags-->

        </div>
        <div class="col-md-9">
            <div class="clearfix m-bot-30 inline-block">
                <h4 class="text-uppercase"><?= $title ?></h4> 
                <!-- Sản phẩm                -->
            </div>
            <?php foreach ($product as $k): ?>
                <div class="col-md-4">
                    <!--product list-->
                    <div class="product-list">
                        <div class="product-img">
                            <a href="cate-detail.php?id=<?= $k->ID?>">
                                <img src="public/uploads/product/<?=$k->Feature_image ?>" alt="" />
                            </a>
                            <div class="<?= $k->Status==0?"sale-label":"null"; ?>">
                                <?= $k->Status==0?"Sale":""; ?>
                            </div>

                        </div>
                        <div class="product-title">
                            <h5><a href="cate-detail.php?id=<?= $k->ID?>"><?= $k->Name ?></a></h5>
                        </div>
                        <div class="product-price">
                            <del><?= $k->List_price ?>₫</del> <?= $k->Sell_price ?>₫
                        </div>
                        <div class="product-rating">
                            <?php 
                            for ($i=1; $i < 6; $i++) { 
                                if ( $i <= $k->Star) {
                                    echo '<i class="fa fa-star"></i>';
                                }
                                else{
                                    echo '<i class="fa fa-star-o"></i>';
                                }
                            }
                            ?>
                        </div>
                        <div class="product-btn">
                            <a href="add-product.php?id=<?= $k->ID?>" class="btn btn-extra-small btn-dark-border  "><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <!--product list-->
                </div>

            <?php endforeach ?>
            <div class="text-center col-md-12">
                <ul class="pagination custom-pagination">
                    <?= $list_page ?>
                </ul>
            </div>
        </div>
    </div>

</div>

</div>
</section>