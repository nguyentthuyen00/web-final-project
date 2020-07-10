<?php include 'layout/header.php' ?>

        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-envelope-o"></i> Liên hệ</h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                            <li class="breadcrumb-item active"><a href="page-contact.html">Liên hệ</a></li>
                        </ol>
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h4>Chúng mình là ai?</h4>
                                    <p>Chúng mình là Ecautopass - Tổng hợp tài liệu và đề thi ngành Thương mại điện tử</p>
                                </div>

                                <div class="col-lg-6">
                                    <h4>Chúng mình có thể giúp gì cho bạn?</h4>
                                    <p>Nếu bạn có điều gì thắc mắc hay những lời góp ý dành cho chúng mình, hãy điền vào form dưới đây. Chúng mình sẽ phản hồi cho bạn sớm nhất có thể. Cảm ơn bạn nhiều <i class="fa fa-heart"></i> </p>
                                </div>
                            </div><!-- end row -->
                           <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" class="form-wrapper" action="https://script.google.com/macros/s/AKfycby8rIY-Acha0dumUsbIz-NWRE5NDFfnViMBpscr8IxJMpCEzaw/exec">
                                    <h4></h4>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Tên của bạn là gì?">
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Bạn nhập email ở đây nhé, chúng mình sẽ phản hồi cho bạn!">
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Có thể cho tụi mình số điện thoại của bạn không?">
                                        <textarea class="form-control" name="content" id="content" placeholder="Bạn muốn liên hệ với chúng mình về vấn đề gì nè?"></textarea>
                                        <button type="submit" class="btn btn-primary"> Gửi <i class="fa fa-envelope-open-o"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div><!-- end page-wrapper -->
                    </><!-- end col -->

                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!-- send mail -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <?php include 'layout/footer.php' ?>