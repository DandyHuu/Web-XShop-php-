<div class="wrapper">
 <header class="l-header">

    <div class="l-navbar l-navbar_t-light l-navbar_expand js-navbar-sticky">
        <div class="container-fluid">
            <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

                <!--logo start-->
                <a href="index.php" class="logo-brand">
                    <img class="" src="public/assets/img/logoxxx.png" alt="">
                </a>
                <!--logo end-->

                <!--mega menu start-->
                <ul class="menuzord-menu menuzord-right c-nav_s-standard">
                    <li>
                       <a href="index.php">Trang chủ</a>
                   </li>


                   <li class=""><a href="#">Sản phẩm</a>
                    <ul class="dropdown">
                        <?php foreach ($listCateParent as $val): ?>
                            <li>
                                <a href="product_request.php?name=<?=$val->Name ?>&id=<?=$val->ID ?>"><?= $val->Name ?></a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </li>

                <li>
                    <a href="about-us.php">Giới thiệu</a>
               </li>
               <li>
                <a href="contrac.php">Liên hệ</a>
            </li>

            <li><a href="#">Blog</a>
                <ul class="dropdown">
                    <?php foreach ($list_cate_blog as $value): ?>
                        <li>
                            <a href="blog_list.php?id=<?=$value->ID ?>"><?= $value->Name ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
                <!-- for -->

                <!-- end -->
            </li>
        </li>

        <li>
            <?php 
                if (isset($_SESSION['auth'])) {
                    echo '
                        <a href="#" class="text-capitalize">Xin chào: '.$_SESSION['auth']['name'].'</a>
                            <ul class="dropdown">
                                <li>
                                    <a href="admin/logout.php">Đăng xuất</a>
                                </li>
                            </ul>
                    ';
                }
                else{
                    echo ' <a href="admin/login.php">Đăng nhập</a>';
                }
             ?>
           
        </li>

        <li class="nav-divider" aria-hidden="true"><a href="javascript:void(0)">|</a>
        </li>
        <?php 
        $cartProduct = 0;
        if( isset($_SESSION['CART']) ){
            foreach ($_SESSION['CART'] as $item2) {
                $cartProduct += $item2['quantity'];
            }
        }
       

        ?>                                               
        <li class="cart-info">
            <a href="shop_cart.php"><i class="fa fa-shopping-cart"></i> cart(<?= $cartProduct ?>)</a>
        </li>

        <li>
            <a href="javascript:void(0)"><i class="fa fa-search"></i> Tìm kiếm </a>
            <div class="megamenu megamenu-quarter-width navbar-search">
                <form action="search.php" role="searchform" class="" method="GET">
                    <div class="input-group">
                        <input type="text" id="keyw" name="keyw" class="form-control" placeholder="Tìm kiếm sản phẩm...">
                        <span class="input-group-addon"><a type="submit"><i class="fa fa-search"></i></a></span>
                    </div>
                </form>
            </div>
        </li>
    </ul>

    <!--mega menu end-->

</nav>
</div>
</div>

</header>
</div>