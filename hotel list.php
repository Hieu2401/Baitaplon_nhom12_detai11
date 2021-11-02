<!doctype html>
<html lang="en">
    <head>
        <title>Hotel List</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        
        <!-- Google Fonts -->	
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        
        <!-- Bootstrap Stylesheet -->	
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
            
        <!-- Custom Stylesheets -->	
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" id="cpswitch" href="css/orange.css">
        <link rel="stylesheet" href="css/responsive.css">
        
        <!--Jquery UI Stylesheet-->
		<link rel="stylesheet" href="css/jquery-ui.min.css">
    </head>
    
    
    <body>

        <!--====== LOADER =====-->
        <div class="loader"></div>


        <!--======== SEARCH-OVERLAY =========-->
        <div class="overlay">
            <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
            <div class="overlay-content">
                <div class="form-center">
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search..." required />
                                <span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                            </div><!-- end input-group -->
                        </div><!-- end form-group -->
                    </form>
                </div><!-- end form-center -->
            </div><!-- end overlay-content -->
        </div><!-- end overlay -->
        <!--============= TOP-BAR ===========-->
        <div id="top-bar" class="tb-text-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="info">
                            <ul class="list-unstyled list-inline">
                                <li><span><i class="fa fa-map-marker"></i></span>TÂY SƠN, ĐỐNG ĐA, HÀ NỘI</li>
                                <li><span><i class="fa fa-phone"></i></span>0987654321</li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="links">
                            <ul class="list-unstyled list-inline">
                                <li><a href="login.html"><span><i class="fa fa-lock"></i></span>ĐĂNG NHẬP</a></li>
                                <li><a href="registration.html"><span><i class="fa fa-plus"></i></span>ĐĂNG KÍ</a></li>
                            </ul>
                        </div><!-- end links -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->

        <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" id="menu-button">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="header-search hidden-lg">
                        <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                    </div>
                    <a href="#" class="navbar-brand"><span><i class="fa fa-plane"></i>STAR</span>TRAVELS</a>
                </div><!-- end navbar-header -->

                <div class="collapse navbar-collapse" id="myNavbar1">
                    <ul class="nav navbar-nav navbar-right navbar-search-link">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Main Homepage</a></li>
                                <li><a href="hotel-homepage.html">Hotel Homepage</a></li>
                                <li><a href="tour-homepage.html">Tour Homepage</a></li>
                            </ul>
                        </li>

                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hotels<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="hotel-homepage.html">Hotel Homepage</a></li>
                                <li class="active"><a href="#">Hotel List</a></li>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tours<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="tour-homepage.html">Tour Homepage</a></li>
                                <li><a href="tour-listing-left-sidebar.html">Hotel List</a></li>

                            </ul>
                        </li>

                        <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
                    </ul>
                </div><!-- end navbar collapse -->
            </div><!-- end container -->
        </nav><!-- end navbar -->

        <div class="sidenav-content">
            <div id="mySidenav" class="sidenav">
                <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>

                <div id="main-menu">
                    <div class="closebtn">
                        <button class="btn btn-default" id="closebtn">&times;</button>
                    </div><!-- end close-btn -->

                    <div class="list-group panel">

                        <a href="#home-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="home-links">
                            <a href="index.html" class="list-group-item">Main Homepage</a>
                            <a href="hotel-homepage.html" class="list-group-item">Hotel Homepage</a>
                            <a href="tour-homepage.html" class="list-group-item">Tour Homepage</a>
                        </div><!-- end sub-menu -->

                        <a href="#hotels-links" class="list-group-item active" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-building link-icon"></i></span>Hotels<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="hotels-links">
                            <a href="hotel-homepage.html" class="list-group-item">Hotel Homepage</a>
                            <a href="#" class="list-group-item active">List View Left Sidebar</a>
                        </div><!-- end sub-menu -->

                        <a href="#tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>Tours<span><i class="fa fa-chevron-down arrow"></i></span></a>

                        <div class="collapse sub-menu" id="tours-links">
                            <a href="tour-homepage.html" class="list-group-item">Tour Homepage</a>
                            <a href="tour-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                        </div><!-- end sub-menu -->

                    </div><!-- end list-group -->
                </div><!-- end main-menu -->
            </div><!-- end mySidenav -->
        </div><!-- end sidenav-content -->
        <!--=================== PAGE-COVER =================-->
        <section class="page-cover" id="cover-hotel-grid-list">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="page-title">DANH SÁCH HOTEL</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">DANH SÁCH HOTEL</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="hotel-listing" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">

                            <div class="side-bar-block filter-block">
                                <h3>Sắp Xếp theo bộ lọc</h3>
                                <p>Tìm Hotel yêu thích của bạn </p>



                            </div><!-- end side-bar-block -->

                            <div class="row">

                                <div class="col-xs-12 col-sm-6 col-md-12">
                                    <div class="side-bar-block support-block">
                                        <h3>Trợ Giúp</h3>
                                        <p>NẾU NHƯ CÓ THẮC MẮC QUÝ KHÁCH HÃY LIÊN HỆ SỐ ĐIỆN THOẠI.</p>
                                        <div class="support-contact">
                                            <span><i class="fa fa-phone"></i></span>
                                            <p>0987654321</p>
                                        </div><!-- end support-contact -->
                                    </div><!-- end side-bar-block -->
                                </div><!-- end columns -->

                            </div><!-- end row -->
                        </div><!-- end columns -->

                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">

                            <div class="list-block main-block h-list-block">
                                <div class="list-content">
                                    <div class="main-img list-img h-list-img">
                                        <a href="hotel-detail-left-sidebar.html">
                                            <img src="images/hotel-1.jpg" class="img-responsive" alt="hotel-img" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="price">568.000VNĐ<span class="divider">|</span><span class="pkg">1 Đêm</span></li>
                                                <li class="rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end h-list-img -->

                                    <div class="list-info h-list-info">
                                        <h3 class="block-title"><a href="hotel-detail-left-sidebar.html">AVG Phú Quốc</a></h3>
                                        <p class="block-minor">From: VIETNAM</p>
                                        <p>Đến với Phú Quốc bạn sẽ đc trải nghiệm không gian khách sạn sang trọng, lịch sự với đội ngũ phục vụ hết sức chuyên nghiệp đặc biệt là view ở đây rất thích hợp cho những bạn thích chụp ảnh.</p>
                                        <a href="hotel-detail-left-sidebar.html" class="btn btn-orange btn-lg">Đặt Ngay</a>
                                    </div><!-- end h-list-info -->
                                </div><!-- end list-content -->
                            </div><!-- end h-list-block -->

                            <div class="list-block main-block h-list-block">
                                <div class="list-content">
                                    <div class="main-img list-img h-list-img">
                                        <a href="hotel-detail-left-sidebar.html">
                                            <img src="images/hotel-2.jpg" class="img-responsive" alt="hotel-img" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="price">568.000VNĐ<span class="divider">|</span><span class="pkg">1 Đêm</span></li>
                                                <li class="rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end h-list-img -->

                                    <div class="list-info h-list-info">
                                        <h3 class="block-title"><a href="hotel-detail-left-sidebar.html">Phú Quốc Ocean Pearl Hotel</a></h3>
                                        <p class="block-minor">From: VIETNAM</p>
                                        <p>Phú Quốc Ocean Pearl Hotel là một nơi nghỉ dưỡng rất thích hợp cho mọi người đến vói chúng tôi các bạn sẽ được trải nghiệm không gian khách sạn đứng đầu ở Việt Nam với những dịch vụ chất lượng tốt nhất và trên hết phong cảnh ở đây khiến bạn không muốn dời.</p>
                                        <a href="hotel-detail-left-sidebar.html" class="btn btn-orange btn-lg">Đặt Ngay</a>
                                    </div><!-- end h-list-info -->
                                </div><!-- end list-content -->
                            </div><!-- end h-list-block -->

                            <div class="list-block main-block h-list-block">
                                <div class="list-content">
                                    <div class="main-img list-img h-list-img">
                                        <a href="hotel-detail-left-sidebar.html">
                                            <img src="images/hotel-3.jpg" class="img-responsive" alt="hotel-img" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="price">568.000VNĐ<span class="divider">|</span><span class="pkg">1 Đêm</span></li>
                                                <li class="rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end h-list-img -->

                                    <div class="list-info h-list-info">
                                        <h3 class="block-title"><a href="hotel-detail-left-sidebar.html">ANYA Quy Nhơn</a></h3>
                                        <p class="block-minor">From: VIETNAM</p>
                                        <p>ANYA Quy Nhơn là một khách sạn nổi tiếng về chất lượng và dịch vụ ở Nha Trang đến với chúng tôi không chỉ mang lại sự thoải mái mà còn tận hưởng những dịch vụ cực kỳ bổ ích.</p>
                                        <a href="hotel-detail-left-sidebar.html" class="btn btn-orange btn-lg">Đặt Ngay</a>
                                    </div><!-- end h-list-info -->
                                </div><!-- end list-content -->
                            </div><!-- end h-list-block -->

                            <div class="list-block main-block h-list-block">
                                <div class="list-content">
                                    <div class="main-img list-img h-list-img">
                                        <a href="hotel-detail-left-sidebar.html">
                                            <img src="images/hotel-4.jpg" class="img-responsive" alt="hotel-img" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="price">568.000<span class="divider">|</span><span class="pkg">1 đêm</span></li>
                                                <li class="rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </li>
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end h-list-img -->

                                    <div class="list-info h-list-info">
                                        <h3 class="block-title"><a href="hotel-detail-left-sidebar.html">NOVOTEL Nha Trang</a></h3>
                                        <p class="block-minor">From: VIETNAM</p>
                                        <p>Khách sạn này là 1 điểm đến thú vị của tất cả mọi người ở đây chúng tôi có những dịch vụ nghỉ dưỡng đẳng cấp hàng đầu VIETNAM, bên cạnh đó văn hóa ẩm thực cũng rất đặc sắc và phong phú.</p>
                                        <a href="hotel-detail-left-sidebar.html" class="btn btn-orange btn-lg">Đặt Ngay</a>
                                    </div><!-- end h-list-info -->
                                </div><!-- end list-content -->
                            </div><!-- end h-list-block -->





                            <div class="pages">
                                <ol class="pagination">
                                    <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                                </ol>
                            </div><!-- end pages -->
                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end hotel-listing -->
        </section><!-- end innerpage-wrapper -->
        <!--======================= BEST FEATURES =====================-->
        <section id="best-features" class="banner-padding black-features">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-dollar"></i></span>
                            <h3>Đảm bảo giá tốt nhất</h3>

                        </div><!-- end b-feature-block -->
                    </div><!-- end columns -->

                    <div class="col-sm-6 col-md-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-lock"></i></span>
                            <h3>An toàn bảo mật</h3>
                        </div><!-- end b-feature-block -->
                    </div><!-- end columns -->

                    <div class="col-sm-6 col-md-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-thumbs-up"></i></span>
                            <h3>Đại lí du lịch tốt nhất</h3>
                        </div><!-- end b-feature-block -->
                    </div><!-- end columns -->

                    <div class="col-sm-6 col-md-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-bars"></i></span>
                            <h3>Hướng dẫn du lịch</h3>
                        </div><!-- end b-feature-block -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end best-features -->
        <!--========================= NEWSLETTER-1 ==========================-->
        <section id="newsletter-1" class="section-padding back-size newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <h2>ĐĂNG KÍ BẢN TIN CỦA CHÚNG TÔI</h2>
                        <p>ĐĂNG KÍ ĐỂ CẬP NHẬT NHỮNG THÚ VỊ VỀ CHÚNG TÔI</p>
                        <form>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" class="form-control input-lg" placeholder="Đăng nhập email của bạn" required />
                                    <span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                                </div>
                            </div>
                        </form>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end newsletter-1 -->
        <!--======================= FOOTER =======================-->
        <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

            <div id="footer-top" class="banner-padding ftr-top-black ftr-text-white">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                            <h3 class="footer-heading">LIÊN HỆ CHÚNG TÔI</h3>
                            <ul class="list-unstyled">
                                <li><span><i class="fa fa-map-marker"></i></span>TÂY SƠN, ĐỐNG ĐA, HÀ NỘI</li>
                                <li><span><i class="fa fa-phone"></i></span>0987654321</li>
                                <li><span><i class="fa fa-envelope"></i></span>0987654321@gmail.com</li>
                            </ul>
                        </div><!-- end columns -->

                        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 footer-widget ftr-links">
                            <h3 class="footer-heading">CÔNG TY</h3>
                            <ul class="list-unstyled">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="hotel-detail-left-sidebar.html">Hotel</a></li>
                                <li><a href="tour-detail-left-sidebar.html">Tours</a></li>
                            </ul>
                        </div><!-- end columns -->

                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                            <h3 class="footer-heading">TÀI NGUYÊN</h3>
                            <ul class="list-unstyled">
                                <li><a href="login.html">Đăng nhập</a></li>
                                <li><a href="registration.html">Đăng ký</a></li>
                            </ul>
                        </div><!-- end columns -->

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                            <h3 class="footer-heading">VỀ CHÚNG TÔI</h3>
                            <p>Đảm bảo cho mọi người những chuyến du lịch sang chảnh và đảm bảo nhất</p>

                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-top -->

            <div id="footer-bottom" class="ftr-bot-black">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                            <p>© 2021 <a href="#">Chấp cánh ước mơ</a></p>
                        </div><!-- end columns -->


                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-bottom -->

        </section><!-- end footer -->
        <!-- Page Scripts Starts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <script src="js/custom-price-slider.js"></script>
        <!-- Page Scripts Ends -->
    </body>
</html>
