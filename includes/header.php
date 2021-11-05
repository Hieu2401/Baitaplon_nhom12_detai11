

<!--============= TOP-BAR ===========-->

<?php if($_SESSION['login'])
{?>
    <div id="top-bar" class="tb-text-white">
        <div class="container" style="color: white;">
            <div class="row">          
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="info">
                        <ul class="list-unstyled list-inline">
                            <li><span><a href="index.php" style="color: white;"><i class="fa fa-home"></i></a></span></li>
                            <li><a href="profile.php" style="color: white;">Thông tin cá nhân</a></li>
                            <li><a href="booking.php" style="color: white;">Tour đã đặt</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="links">
                        <ul class="list-unstyled list-inline">
                         <li class="tol">Tài khoản :</li>                
                         <li class="sig"><?php echo htmlentities($_SESSION['login']);?></li> 
                         <a style="color: white;">|</a>
                         <li class="sigi"><a href="logout.php" > Đăng xuất</a></li>
                    </ul>
                </div>
            </div>          
        </div>
    </div>
</div>
<?php } else {?>

    <div id="top-bar" class="tb-text-white">
        <div class="container" style="color: white;">
            <div class="row">          
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="info">
                        <ul class="list-unstyled list-inline">
                            <li><span><i class="fa fa-map-marker"></i></span>TÂY SƠN, ĐỐNG ĐA, HÀ NỘI</li>
                            <li><span><i class="fa fa-phone"></i></span>0987654321</li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="links">
                        <ul class="list-unstyled list-inline">
                            <li  class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" ><span><i class="fa fa-lock"></i></span>Đăng nhập</a></li>
                            <li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" ><span><i class="fa fa-plus"></i></span>Đăng ký</a></li>
                        </ul>
                    </div>
                </div>          
            </div>
        </div>
    </div>

<?php }?>

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
        <a href="index.php" class="navbar-brand"><span><i class="fa fa-plane"></i>STAR</span>TRAVELS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar1">
        <ul class="nav navbar-nav navbar-right navbar-search-link">
            <li ><a href="index.php" class="dropdown-toggle" >Trang chủ</a>          
            </li>

            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Tour<span><i class="fa fa-angle-down"></i></span></a>
                <ul class="dropdown-menu">
                    <li><a href="tour-trongnuoc.php">Du lịch</a></li>
                </ul>           
            
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Người dùng<span><i class="fa fa-angle-down"></i></span></a>
            <ul class="dropdown-menu">
                <li><a href="profile.php">Thông tin</a></li>
                <li><a href="booking.php">Hóa đơn</a></li>
            </ul>           
        </li>
        <li><a href="javascript:void(2)" data-toggle="modal" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
    </ul>
</div>
</div>
</nav>    



