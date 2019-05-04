<section class="page-title">
    <div class="container">
        <h4 class="text-uppercase">Chi tiết của sản phẩm </h4>
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a>
            </li>
            <li class="active"><a href="contrac.php"><?= $title ?></a>
            </li>
        </ol>
    </div>
</section>
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="post-list-aside">
                        <div class="post-single">
                            <div class="post-slider-thumb post-img text-center">
                                <ul class="slides">
                                    <?php foreach ($productList as $val): ?>
                                     <li data-thumb="<?= $val->Photo_link?>">
                                        <a href="javascript:;" title="Freshness Photo">
                                            <img src="<?= $val->Photo_link?>" alt="" />
                                        </a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="product-title">
                    <h2 class="text-uppercase"><?= $val->Name ?></h2>
                </div>

                <div class="product-price txt-xl">
                    <span class="border-tb p-tb-10"><?= $val->Sell_price ?>₫<del> <?= $val->List_price ?>₫</del></span>
                </div>

                <ul class="portfolio-meta m-bot-10 m-top-10">
                    <li><span> Item No </span> 09087</li>
                    <li><span> Condition </span> New</li>
                </ul>
                <p>
                    Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content. Advanced theme options panel to easily customize your website.
                </p>

                <ul class="portfolio-meta m-bot-10 stock">
                    <li><span><strong class="number-item"><?= $val->Stock ?></strong> Sản phẩm </span>  <span class="status">Trong kho</span>
                    </li>
                </ul>
                <div class="p-values">
                    <ul class="portfolio-meta m-bot-10 ">
                        <li>
                            <span> Size </span>
                            <span>
                                <select class="form-control">
                                    <option>S</option>
                                    <option>M</option>
                                    <option>L</option>
                                    <option>XL</option>
                                </select>
                            </span>
                        </li>
                    </ul>
                    <ul class="p-quantity m-bot-10 ">
                        <li>
                            <label>Số lượng</label>
                        </li>
                        <li>
                            <input id="demo0" type="text" value="1" name="demo0" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500"
                            data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default"
                            data-bts-button-up-class="btn btn-default" />
                        </li>

                    </li>
                </ul>
            </div>

            <div class="clearfix">
                <a href="add-product.php?id=<?= $val->ID?>" class="btn btn-medium btn-dark-solid  "><i class="fa fa-shopping-cart"></i> thêm vào giỏ</a>
            </div>
        </div>
    </div>
    <section class="body-content ">
        <div class="row page-content">
            <div class="col-md-12">
                <!-- tabs border start -->
                <section class="normal-tabs">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#tab-one">Thông tin</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#tab-two">Số liệu kĩ thuật</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#tab-three">Đánh giá</a>
                        </li>

                    </ul>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="tab-one" class="tab-pane active">
                                <h4 class="text-uppercase">mô tả sản phẩm</h4>
                                <?= $val->Description ?>
                            </div>
                            <div id="tab-two" class="tab-pane">
                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        <?php foreach ($productDetail as $dt): ?>
                                            <tr>
                                                <td><?= $dt->Name ?></td>
                                                <td><?= $dt->Detail_pro ?></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>

                            </div>
                            <div id="tab-three" class="tab-pane">
                                <ul class="media-list comments-list clearlist">
                                    <?php foreach ($commentUser as $c): ?>
                                        <li class="media">
                                           
                                            <div class="media-body">
                                                <div class="comment-info">
                                                    <div class="reviewer text-uppercase">
                                                        <a href="#"><?= $c->C_name ?></a>
                                                    </div>
                                                    <?= $c->Time_send ?>
                                                    <span class="review-rating">
                                                       <?php 
                                                       for ($i=1; $i < 6; $i++) { 
                                                        if ( $i <= $c->Star) {
                                                            echo '<i class="fa fa-star"></i>';
                                                        }
                                                        else{
                                                            echo '<i class="fa fa-star-o"></i>';
                                                        }
                                                    }

                                                    ?>
                                                </span>
                                            </div>

                                            <p>
                                               <?= $c->Comment ?>
                                           </p>
                                       </div>
                                   </li>
                               <?php endforeach ?>
                               <!-- comment item end -->

                           </ul>

                           <!--add review start-->
                           <div class="heading-title-alt text-left heading-border-bottom">
                            <h4 class="text-uppercase">Thêm đánh giá</h4>
                        </div>

                        <form method="post" action="comment.php" id="form" role="form" class="blog-comments">

                            <div class="row">
                                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                <div class="col-md-6 form-group">
                                    <!-- Name -->
                                    <input type="text" name="name" id="name" class=" form-control" placeholder="Tên bạn *" maxlength="100" required="">
                                </div>

                                <div class="col-md-6 form-group">
                                    <!-- Email -->
                                    <input type="email" name="email" id="email" class=" form-control" placeholder="Email *" maxlength="100" required="">
                                </div>


                                <div class="form-group col-md-12">
                                    <select class="form-control" name="star">
                                        <option value="">Đánh giá sao -- Chọn 1 --</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                                <!-- Comment -->
                                <div class="form-group col-md-12">
                                    <textarea name="text" id="text" class=" form-control" rows="6" placeholder="Đánh giá..." maxlength="400"></textarea>
                                </div>

                                <!-- Send Button -->
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-small btn-dark-solid ">
                                        Gửi đánh giá
                                    </button>
                                </div>


                            </div>

                        </form>
                        <!--add review end-->

                    </div>
                </div>
            </div>
        </section>
        <!--tabs border end-->
    </div>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="heading-title-alt text-left ">
            <h3 class="text-uppercase">Sản phẩm tương tự </h3>
            <span class="text-uppercase">Chúng tôi có <?= count($product) ?> sản phẩm tương tự</span>
        </div>

        <!--portfolio carousel-->

        <div id="portfolio-carousel" class=" portfolio-with-title col-3 ">
            <?php foreach ($product as $n): ?>
                <div class="portfolio-item">
                    <div class="thumb">
                        <img src="<?= $n->Feature_image ?>" alt="">
                        <div class="portfolio-hover">
                            <div class="action-btn">
                                <a href="<?= $n->Feature_image ?>" class="popup-link" title=""> <i class="icon-basic_magnifier"></i> 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-title">
                        <h4><a href="<?= $n->Link ?>" class="popup-link" title="lightbox view"><?= $n->Name ?></a></h4>
                        <p class="txt-xl"><?= $n->Sell_price ?>₫</p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

        <!--portfolio carousel-->

    </div>
</div>
</div>
</div>

<!--subscribe start-->
<div class="subscribe-box gray-bg ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="subscribe-info">
                    <h4 class=" ">Bạn muốn mua hàng sau </h4>
                    <span class=" ">Đăng ký để liên hệ với chúng tôi</span>
                </div>
                <div class="subscribe-form">
                    <form class="form-inline">
                        <input type="text" class="form-control" placeholder="Enter your email address">
                        <button type="submit" class="btn btn-medium btn-rounded btn-dark-solid text-uppercase">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--subscribe end-->

</section>

