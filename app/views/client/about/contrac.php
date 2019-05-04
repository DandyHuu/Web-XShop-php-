<section class="page-title">
    <div class="container">
        <h4 class="text-uppercase">Liên hệ với chúng tôi! </h4>
        <span>Không có bất kì phí tổn nào khi bạn đưa ra ý kiến</span>
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a>
            </li>
            <li class="active"><a href="contrac.php"><?= $title ?></a>
            </li>
        </ol>
    </div>
</section>
<section class="body-content">
    <div class="page-content">

        <div class="container">

            <div class="heading-title-alt border-short-bottom text-center ">
                <h3 class="text-uppercase">hãy liên hệ với chúng tôi khi bạn có bất kì vấn đề nào</h3>
                <div class="half-txt">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. Nam libero tempore</div>
            </div>

            <div class="row page-content">
                <div class="col-md-4">
                    <div class="featured-item text-center">
                        <div class="icon">
                            <i class="icon-map"></i>
                        </div>
                        <div class="title text-uppercase">
                            <h4>Tìm kiếm chúng tôi</h4>
                        </div>
                        <div class="desc">
                            Upper Level, Overseas Passenger
                            <br>Terminal, The Rocks, Sydney 2000
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featured-item text-center">
                        <div class="icon">
                            <i class="icon-mobile"></i>
                        </div>
                        <div class="title text-uppercase">
                            <h4>Gọi cho chúng tôi</h4>
                        </div>
                        <div class="desc">
                            Bất kì khi nào. Chúng tôi hoạt động 24/7
                            <br>+86 01252874562
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featured-item text-center">
                        <div class="icon">
                            <i class="icon-envelope"></i>
                        </div>
                        <div class="title text-uppercase">
                            <h4>Gửi mail</h4>
                        </div>
                        <div class="desc">
                            Đến email hỗ trợ
                            <br>mail@X_Shop.com
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-10 col-md-offset-1">
                    <form class="contact-comments js-Mailer" method="post" novalidate="true" data-toggle="validator">
                        <div class="row">

                            <div class="col-md-6 ">

                                <div class="form-group">
                                    <!-- Name -->
                                    <input type="text" name="name" class=" form-control" placeholder="Tên của bạn *" maxlength="100" required="" data-error="Vui lòng nhập tên">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <!-- Email -->
                                    <input type="email" name="email" class=" form-control" placeholder="Email *" maxlength="100" required="" data-error="Email không chính xác!">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <!-- Subject -->
                                    <input type="text" name="subject" class=" form-control" placeholder="Vấn đề của bạn" maxlength="100">
                                </div>
                            </div>

                            <div class="col-md-6 form-group">
                                <div class="form-group">
                                    <!-- Comment -->
                                    <textarea name="comments" class="cmnt-text form-control" placeholder="Ý kiến" maxlength="400"></textarea>
                                </div>
                                <div class="form-group full-width">
                                    <button type="submit" class="btn btn-small btn-dark-solid  disabled">Gửi ý kiến</button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Google Map start-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.890868640493!2d105.77274011450483!3d21.037052185993875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b6163c392f%3A0x1ebf64facbb56d03!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBUaMawxqFuZyBt4bqhaQ!5e0!3m2!1svi!2s!4v1522082622430" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <!--  Google Map End-->
</section>