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

                            <div class="widget">
                                <div class="heading-title-alt text-left heading-border-bottom">
                                    <h6 class="text-uppercase">Tin tức khác</h6>
                                </div>
                                <ul class="widget-latest-post">
                                    <?php foreach ($hot_blog as $b): ?>
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
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
                                            <a href="#"><?= $c->Name ?></a>
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
                                        <a href="#"><?= $k->Name ?></a>
                                    <?php endforeach ?>
                                   
                                </div>
                            </div>
                            <!--tags widget-->

                        </div>
                        <div class="col-md-8">
                            <!--classic image post-->
                            <?php foreach ($list_detail_blog as $item): ?>
                                
                            <div class="blog-classic">
                                <div class="blog-post">
                                    <div class="full-width">
                                        <img src="<?= $item->Image ?>" alt="">
                                    </div>
                                    <h4 class="text-uppercase"><a href="blog-single.html"><?= $item->Blog_name ?></a></h4>
                                    <ul class="post-meta">
                                        <li><i class="fa fa-user"></i>posted by <a href="#"><?= $item->Poster ?></a>
                                        </li>
                                        <li>
                                            <i class="fa fa-folder-open"></i>  <a href="#"><?= $item->Kind ?></a>
                                        </li>
                                        <li>|</li>
                                        <li><a href="#"><?= $item->Time ?></a>
                                        </li>
                                    </ul>
                                    <p>
                                        <?= $item->Description ?>
                                    </p>
                                </div>
                            </div>
                            <?php endforeach ?>

                            <!--classic image post-->
                        </div>

                    </div>
                </div>
            </div>


        </section>