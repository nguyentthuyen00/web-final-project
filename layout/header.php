<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Site Metas -->
        <title>Ecautopass - Tổng hợp tài liệu và đề thi ngành Thương mại điện tử</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <!-- Site Icons -->
        <link rel="shortcut icon" href="images/apple-touch-icon.svg" type="image/apple-touch-icon" />
        <link rel="apple-touch-icon" href="images/apple-touch-icon.svg">
        
        <!-- Design fonts -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,400i,500,700" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- FontAwesome Icons core CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">

        <!-- Responsive styles for this template -->
        <link href="css/responsive.css" rel="stylesheet">

        <!-- Colors for this template -->
        <link href="css/colors.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

<body>

    <!-- LOADER -->
   <div id="preloader">
        <img class="preloader" src="images/loader.gif" alt="">
    </div>
    <!-- END LOADER -->

    <div id="wrapper">
        <div class="collapse top-search" id="collapseExample">
            <div class="card card-block">
                <div class="newsletter-widget text-center">
                    <form class="form-inline">
                        <input type="text" class="form-control" placeholder="Bạn đang tìm gì thế?">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- end newsletter -->
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
                                <li class="list-inline-item"><a href="page-contact.php"><i class="fa fa-user-circle-o"></i> Liên hệ </a></li>
                                <?php if(!isset($_SESSION['admin']))  {?>
                                <li class="list-inline-item"><a href="login/login.php"><i class="fa fa-sign-in"></i> Đăng nhập </a></li>
                                <?php }else { ?>

                                <li class="list-inline-item"><a href="page-manage-post.php"><i class="fa fa-file"></i> Quản lí đề thi </a></li>
                                <li class="list-inline-item"><a href="page-create-post.php"><i class="fa fa-pencil"></i>Đăng bài </a></li>

                                <li class="list-inline-item"><a href="login/logout.php"><i class="fa fa-sign-out"></i> Đăng xuất </a></li>
                                <?php } ?>
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
                        <a href="index.php" target="_self"> <img src="images/logo.svg" alt="">
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
                                <a class="nav-link color-blue-hover" href="index.php"> Trang chủ </a>
                            </li>
                            <li class="nav-item dropdown has-submenu">
                                <a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Đại cương </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                    <li><a class="dropdown-item">Lý luận chính trị<span class="hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=maclenin">Những nguyên lý cơ bản của chủ nghĩa Mac-Lenin</a></li>
                                            <li><a class="dropdown-item" href="./page-subject?subject=CSVN">Đường lối cách mạng của Đảng CSVN</a></li>
                                            <li><a class="dropdown-item" href="./page-subject?subject=HCM">Tư tưởng Hồ Chí Minh</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item">Toán - Khoa học tự nhiên<span class="hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=GiaiTich">Giải tích</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=DSTT">Đại số tuyến tính</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=CTRR">Cấu trúc rời rạc</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=XSTK">Xác suất thống kê</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item">Môn học khác<span class="hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=KNNN">Kỹ năng nghề nghiệp</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=PLDC">Pháp luật đại cương</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown has-submenu">
                                <a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Chuyên Ngành </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                    <li><a class="dropdown-item"> Cở Sở Nhóm Ngành <span class="hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=NMLT">Nhập Môn Lập Trình</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=LTHDT">Lập Trình Hướng Đối Tượng</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=CTDLVGT">Cấu Trúc Dữ Liệu Và Giải Thuật</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=CSDL">Cơ Sở Dữ Liệu</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=NMMMT">Nhập Môn Mạng Máy Tính</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=GTN">Giới Thiệu Ngành</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item"> Cơ Sở Ngành <span class="hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=KTHDC">Kinh Tế Học Đại Cương</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=TTCB">Tiếp Thị Căn Bản</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=PTNVDN">Phân Tích Thiết Kế Quy Trình Nghiệp Vụ Doanh Nghiệp</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=QLDATMDT">Quản Trị Dự Án TMĐT</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=TMDT">Thương Mại Điện Tử</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=PTUDW">Phát Triển Ứng Dụng Web</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=KTDL">Khai Thác Dữ Liệu</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item"> Chuyên Ngành Bắt Buộc <span class="hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=TTTT">Tiếp Thị Trực Tuyến</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=TKHTTMDT">Thiết Kế Hệ Thống TMĐT</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=QTKHNCC">Quản Trị Quan Hệ Khách Hàng Và Nhà Cung Cấp</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=HTTTTT">Hệ Thống Thanh Toán Trực Tuyến</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=HHTRQD">Hệ Hỗ Trợ Ra Quyết Định</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=PLTTMDT">Pháp Luật Trong TMĐT</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=ATBMTMDT">An Toàn Và Bảo Mật TMĐT</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item"> Chuyên Ngành Tự Chọn <span class="hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=NLKT">Nguyên Lý Kế Toán</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=MXH">Mạng Xã Hội</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=HDNLDN">Hoạch Định Nguồn Lực Doanh Nghiệp</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=QTBH">Quản Trị Bán Hàng</a></li>
                                            <li><a class="dropdown-item" href="./page-subject.php?subject=QTNL">Quản Trị Nhân Lực</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-blue-hover" href="page-video.php"><i class="fa fa-play-circle-o"></i> Videos học tập</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link color-blue-hover" href="page-about-us.php"></i>About us</a>
                        </li>
                        </ul>
                    </div>
                </nav>
            </div><!-- end container -->
        </header><!-- end header -->
    </body>