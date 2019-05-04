<section class="page-title">
    <div class="container">
        <h4 class="text-uppercase">Những tin tức về đồng hồ </h4>
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a>
            </li>
            <li class="active"><a href="shop_cart.php"><?= $title ?></a>
            </li>
        </ol>
    </div>
</section>
<section class="body-content ">

            <div class="page-content">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4">

                            <!--search widget-->
                            <div class="widget">
                                <form class="form-inline form" role="form">
                                    <div class="search-row">
                                        <button class="search-btn" type="submit" title="Search">
                                            <i class="fa fa-search"></i>
                                        </button>
                                        <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                    </div>
                                </form>
                            </div>
                            <!--search widget-->

                        
                            <!--latest post widget-->
                            <div class="widget">
                                <div class="heading-title-alt text-left heading-border-bottom">
                                    <h6 class="text-uppercase">latest post</h6>
                                </div>
                                <ul class="widget-latest-post">
                                    <?php foreach ($hot_blog as $b): ?>
                                    <li>
                                        <div class="thumb">
                                            <a href="blog_detail.php?blog_id=<?= $b->ID?>">
                                                <img src="<?= $b->Image ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="w-desk">
                                            <a href="blog_detail.php?blog_id=<?= $b->ID?>"><?= $b->Blog_name ?></a>
                                            April 25, 2014
                                        </div>
                                    </li>
                                   
                                     <?php endforeach ?>
                                </ul>
                            </div>

                            <!--latest post widget-->

                            <!--follow us widget-->
                            <div class="widget">
                                <div class="heading-title-alt text-left heading-border-bottom">
                                    <h6 class="text-uppercase">Liên kết</h6>
                                </div>
                                <div class="widget-social-link circle">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                            </div>
                            <!--follow us widget-->

                            <!--category widget-->
                            <div class="widget">
                                <div class="heading-title-alt text-left heading-border-bottom">
                                    <h6 class="text-uppercase">Danh mục khác</h6>
                                </div>
                                <ul class="widget-category">
                                    <?php foreach ($listCateParent as $c): ?>
                                        <li>
                                            <a href="blog_detail.php?blog_id=<?= $value->ID?>"><?= $c->Name ?></a>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                            <!--category widget-->

                            <!--tags widget-->
                            <div class="widget">
                                <div class="heading-title-alt text-left heading-border-bottom">
                                    <h6 class="text-uppercase">Tag</h6>
                                </div>
                                <div class="widget-tags">
                                    <?php foreach ($listCate as $k): ?>
                                        <a href="blog_detail.php?blog_id=<?= $value->ID?>"><?= $k->Name ?></a>
                                    <?php endforeach ?>
                                   
                                </div>
                            </div>
                            <!--tags widget-->

                        </div>
                        <div class="col-md-8">
                            <!--classic image post-->
                             <?php foreach ($list_blog_id as $value): ?>
                            <div class="blog-classic">
                                <div class="date right">
                                    <?= date("d",strtotime($value->Time)) ?>
                                    <span><?= date("M Y",strtotime($value->Time)) ?></span>
                                </div>
                                <div class="blog-post">
                                    <div class="full-width">
                                        <img src=" <?= $value->Image ?>" alt="">
                                    </div>
                                    <h4 class="text-uppercase"><a href="blog-single.html"> <?= $value->Blog_name ?></a></h4>
                                    <ul class="post-meta">
                                        <li><i class="fa fa-user"></i>posted by <a href="#"> <?= $value->Poster ?></a>
                                        </li>
                                    </ul>
                                    <p> <?= $value->Description ?></p>
                                    <a href="blog_detail.php?blog_id=<?= $value->ID?>" class="btn btn-small btn-dark-solid  "> Xem thêm</a>
                                </div>
                            </div>
                            <?php endforeach?>
                            <div class="col-md-12">
                                <!--pagination-->
                                <div class="text-center">
                                    <ul class="pagination custom-pagination">
                                        <?= $list_page_blog?>
                                    </ul>
                                </div>
                                <!--pagination-->
                            </div>


                        </div>

                    </div>
                </div>
            </div>


        </section>