 <!DOCTYPE html>
 <html lang="en">


 <!-- Mirrored from massive.markup.themebucket.net/login-register-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:52:33 GMT -->
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="../public/assets/img/favicon.png">

    <title>Đăng nhập</title>

    <!--common style-->
    <link href='http://fonts.googleapis.com/css?family=Abel|Source+Sans+Pro:400,300,300italic,400italic,600,600italic,700,700italic,900,900italic,200italic,200' rel='stylesheet' type='text/css'>

    <!-- inject:css -->
    <link rel="stylesheet" href="../public/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="../public/assets/vendor/elasic-slider/elastic.css">
    <link rel="stylesheet" href="../public/assets/vendor/iconmoon/linea-icon.css">
    <link rel="stylesheet" href="../public/assets/vendor/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="../public/assets/vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../public/assets/vendor/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="../public/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/assets/css/shortcodes.css">
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <link rel="stylesheet" href="../public/assets/css/default-theme.css">
    <!-- endinject -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../public/assets/vendor/backward/html5shiv.js"></script>
    <script src="../public/assets/vendor/backward/respond.min.js"></script>
<![endif]-->
</head>

<body>

    <!--  preloader start -->
    <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->
    <div class="wrapper">

        <section class="body-content ">

            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <dl class="accordion login-accordion">
                                <dt>
                                    <a href="#">Đăng nhập với tài khoản của bạn</a>
                                </dt>
                                <dd>
                                    <div class="login register ">
                                        <div class=" btn-rounded">
                                            <form class="" id="login-form" method="post" novalidate="true" data-toggle="validator">

                                                <div class="form-group">
                                                    <input type="text" name="email" value="" class="form-control" placeholder="Email" maxlength="50" minlength="6" required data-error="Vui lòng nhập email" >
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group">
                                                    <input maxlength="100" required="" data-error="Vui lòng nhập mật khẩu" type="password" name="pass" value="" class="form-control " placeholder="Mật khẩu">
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <!-- <span style="color: red"><?= $msg ?></span> -->
                                                <div class="form-group">
                                                    <button class="btn btn-small btn-dark-solid full-width" type="submit" value="login">Đăng nhập
                                                    </button>
                                                </div>

                                                <div class="form-group">
                                                    <input  type="checkbox" value="remember-me" id="checkbox1">
                                                    <label for="checkbox1">Remember me</label>
                                                    <a class="pull-right" data-toggle="modal" href="#forgotPass"> Forgot Password?</a>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </dd>
                                <dt>
                                    <a href="#">Bạn không có tài khoản? Đăng ký ngay!</a>
                                </dt>
                                <dd>
                                    <form class=" login" action="#" method="post" data-toggle="validator">

                                        <div class="form-group">
                                            <input maxlength="100" required="" data-error="Vui lòng nhập tên" type="text" class="form-control" placeholder="Tên của bạn">
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <input maxlength="100" required="" data-error="Vui lòng nhập lại email" type="text" class="form-control" placeholder="Email">
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <input minlength="6" required="" data-error="Vui lòng nhập lại tài khoản (lớn hơn 6 kí tự)" type="text" class="form-control" placeholder="Tài khoản">
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <input maxlength="13" minlength="12" required="" data-error="Số điện thoại không chính xác" type="text" class="form-control" placeholder="Điện thoại">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <input maxlength="100" required="" data-error="Mật khẩu phải dài hơn 6 kí tự" type="text" class="form-control" placeholder="Mật khẩu">
                                            <div class="help-block with-errors"></div>
                                        </div>


                                        <div class="form-group">
                                            <button class="btn btn-small btn-dark-solid full-width " id="login-form-submit" name="login-form-submit" value="login">Đăng kí
                                            </button>
                                        </div>


                                    </form>
                                </dd>

                            </dl>
                        </div>
                    </div>
                </div>

            </div>


        </section>
        <!--body content end-->

        <!--footer start 1-->
        
        <!--footer 1 end-->

    </div>

    <!-- inject:js -->
    <script src="../public/assets/vendor/modernizr/modernizr.js"></script>
    <script src="../public/assets/vendor/jquery/jquery-1.10.2.min.js"></script>
    <script src="../public/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../public/assets/vendor/bootstrap-validator/validator.min.js"></script>
    <script src="../public/assets/vendor/breakpoint/breakpoint.js"></script>
    <script src="../public/assets/vendor/count-to/jquery.countTo.js"></script>
    <script src="../public/assets/vendor/countdown/jquery.countdown.js"></script>
    <script src="../public/assets/vendor/easing/jquery.easing.1.3.js"></script>
    <script src="../public/assets/vendor/easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="../public/assets/vendor/elasic-slider/jquery.eislideshow.js"></script>
    <script src="../public/assets/vendor/flex-slider/jquery.flexslider-min.js"></script>
    <script src="../public/assets/vendor/gmap/jquery.gmap.min.js"></script>
    <script src="../public/assets/vendor/images-loaded/imagesloaded.js"></script>
    <script src="../public/assets/vendor/isotope/jquery.isotope.js"></script>
    <script src="../public/assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="../public/assets/vendor/mailchimp/jquery.ajaxchimp.min.js"></script>
    <script src="../public/assets/vendor/menuzord/menuzord.js"></script>
    <script src="../public/assets/vendor/nav/jquery.nav.js"></script>
    <script src="../public/assets/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="../public/assets/vendor/parallax-js/parallax.min.js"></script>
    <script src="../public/assets/vendor/smooth/smooth.js"></script>
    <script src="../public/assets/vendor/sticky/jquery.sticky.min.js"></script>
    <script src="../public/assets/vendor/touchspin/touchspin.js"></script>
    <script src="../public/assets/vendor/typist/typist.js"></script>
    <script src="../public/assets/vendor/visible/visible.js"></script>
    <script src="../public/assets/vendor/wow/wow.min.js"></script>
    <script src="../public/assets/js/scripts.js"></script>
    <!-- endinject -->
</body>


<!-- Mirrored from massive.markup.themebucket.net/login-register-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:52:33 GMT -->
</html>

