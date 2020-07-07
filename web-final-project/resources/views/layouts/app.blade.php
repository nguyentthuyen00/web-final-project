<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Site Metas -->
    <title>ECAutopass</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('images/apple-touch-icon.svg') }}" type="image/apple-touch-icon">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.svg') }}">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,400i,500,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="{{ asset('css/colors.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="{{ asset('images/loader.gif') }}" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->
    
    <div id="wrapper">
        <div class="collapse top-search" id="collapseExample">
            <div class="card card-block">
                <div class="newsletter-widget text-center">
                    <form class="form-inline">
                        <input type="text" class="form-control" placeholder="Bạn đang tìm gì thế?">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </form>
                </div><!-- end newsletter -->
            </div>
        </div><!-- end top-search -->

        <div class="topbar-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 hidden-xs-down">
                        <div class="topsocial">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Github"><i class="fa fa-github"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-linkedin"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                        </div><!-- end social -->
                    </div><!-- end col -->

                    <div class="col-lg-4 hidden-md-down">
                        <div class="topmenu text-center">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="{{ url('/page-contact') }}"><i class="fa fa-user-circle-o"></i> Liên hệ </a></li>
                                
                            </ul><!-- end ul -->
                        </div><!-- end topmenu -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="topsearch text-right">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-search"></i> Tìm kiếm </a>
                        </div><!-- end search -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end topbar -->

        <div class="header-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <img src="{{ asset('images/logo.svg') }}" alt="">
                        </div><!-- end logo -->
                    </div>
                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end header -->

        <header class="header">
            <div class="container">
                <nav class="navbar navbar-inverse navbar-toggleable-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ecautopassmenu" aria-controls="ecautopass" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-md-center" id="ecautopassmenu">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link color-blue-hover" href="{{ url('/index') }}"> Trang chủ </a>
                            </li>
                            <li class="nav-item dropdown has-submenu">
                                <a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Đại cương </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                    <li><a class="dropdown-item">Lý luận chính trị<span class="hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Những nguyên lý cơ bản của chủ nghĩa Mac-Lenin</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Đường lối cách mạng của Đảng CSVN</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Tư tưởng Hồ Chí Minh</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item">Toán - Khoa học tự nhiên<span class="hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Giải tích</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Đại số tuyến tính</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Cấu trúc rời rạc</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Xác suất thống kê</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item">Môn học khác<span class="hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Kỹ năng nghề nghiệp</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Pháp luật đại cương</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown has-submenu">
                                <a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Chuyên Ngành </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                    <li><a class="dropdown-item"> Cở Sở Nhóm Ngành <span class="hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Nhập Môn Lập Trình</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Lập Trình Hướng Đối Tượng</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Cấu Trúc Dữ Liệu Và Giải Thuật</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Cơ Sở Dữ Liệu</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Nhập Môn Mạng Máy Tính</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Giới Thiệu Ngành</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item"> Cơ Sở Ngành <span class="hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Kinh Tế Học Đại Cương</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Tiếp Thị Căn Bản</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Phân Tích Thiết Kế Quy Trình Nghiệp Vụ Doanh Nghiệp</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Quản Trị Dự Án TMĐT</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Thương Mại Điện Tử</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Phát Triển Ứng Dụng Web</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Khai Thác Dữ Liệu</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item"> Chuyên Ngành Bắt Buộc <span class="hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Tiếp Thị Trực Tuyến</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Thiết Kế Hệ Thống TMĐT</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Quản Trị Quan Hệ Khách Hàng Và Nhà Cung Cấp</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Hệ Thống Thanh Toán Trực Tuyến</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Hệ Hỗ Trợ Ra Quyết Định</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Pháp Luật Trong TMĐT</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">An Toàn Và Bảo Mật TMĐT</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item"> Chuyên Ngành Tự Chọn <span class="hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Nguyên Lý Kế Toán</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Mạng Xã Hội</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Hoạch Định Nguồn Lực Doanh Nghiệp</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Quản Trị Bán Hàng</a></li>
                                            <li><a class="dropdown-item" href="{{ url('page-subject') }}">Quản Trị Nhân Lực</a></li>
                                        </ul>
                                    </li>
                                   
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-blue-hover" href="{{ url('page-video') }}"><i class="fa fa-play-circle-o"></i> Videos học tập</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div><!-- end container -->
        </header><!-- end header -->

        @yield('content')<!-- content of website -->

        <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="widget">
                    <div class="footer-text text-center">
                        <a href="{{ url('index') }}"><img src="{{ asset('images/logo.svg') }}" alt="" class="img-fluid"></a>
                        <p>Ecautopass - Tổng hợp tài liệu và đề thi ngành Thương mại điện tử</p>
                        <div class="social">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Github"><i class="fa fa-github"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-linkedin"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                        </div>

                        <hr class="invis">

                        <div class="newsletter-widget text-center">
                            <form class="form-inline">
                                <input type="text" class="form-control" placeholder="Enter your email address">
                                <button type="submit" class="btn btn-primary">Subscribe <i class="fa fa-envelope-open-o"></i></button>
                            </form>
                        </div>
                        <!-- end newsletter -->
                    </div>
                    <!-- end footer-text -->
                </div>
                <!-- end widget -->
            </div>
            <!-- end col -->
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <div class="copyright">&copy; Ecautopass. Design by: Ecautopass Team.</div>
            </div>
        </div>
    </div>
    <!-- end container -->
</footer>
<!-- end footer -->

<div class="dmtop">Scroll to Top</div>

</div>
<!-- end wrapper -->

<!-- Core JavaScript
    ================================================== -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/tether.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>

