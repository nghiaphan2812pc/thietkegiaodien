<?php
    include_once 'connect.php';
    $customerId = $_GET['customerId'];
    $sql_update = "SELECT * from customers
            where customerId = $customerId";
$query__update = mysqli_query($conn, $sql_update);
$row = mysqli_fetch_array($query__update);
if (isset($_POST['smb'])) {
    $customerName = $_POST['customerName'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $sql = "UPDATE customers
        SET customerName = '$customerName',
        pass = '$pass',
        email = '$email',
        phone = '$phone',
        address = '$address'
        where customerId = '$customerId'";
    $query = mysqli_query($conn, $sql);
    header("location:all_customer.php");
}
?>
<!doctype html>
<html class="no-js" lang="">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Chỉnh sửa khách hàng</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
  <!-- Normalize CSS -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- Main CSS -->
  <link rel="stylesheet" href="css/main.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- Flaticon CSS -->
  <link rel="stylesheet" href="fonts/flaticon.css">
  <!-- Animate CSS -->
  <link rel="stylesheet" href="css/animate.min.css">
  <!-- Select 2 CSS -->
  <link rel="stylesheet" href="css/select2.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- Modernize js -->
  <script src="js/modernizr-3.6.0.min.js"></script>
</head>

<body>
  <!-- Preloader Start Here -->
  <div id="preloader"></div>
  <!-- Preloader End Here -->
  <div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    <div class="navbar navbar-expand-md header-menu-one bg-light">
      <div class="nav-bar-header-one">
        <div class="header-logo">
          <a href="index.php">
            <img src="image/logo4.png" alt="logo">
          </a>
        </div>
        <div class="toggle-button sidebar-toggle">
          <button type="button" class="item-link">
            <span class="btn-icon-wrap">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </button>
        </div>
      </div>
      <div class="d-md-none mobile-nav-bar">
        <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
          <i class="far fa-arrow-alt-circle-down"></i>
        </button>
        <button type="button" class="navbar-toggler sidebar-toggle-mobile">
          <i class="fas fa-bars"></i>
        </button>
      </div>
      <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
        <ul class="navbar-nav">
          <li class="navbar-item header-search-bar">
            <div class="input-group stylish-input-group">
              <span class="input-group-addon">
                <button type="submit">
                  <span class="flaticon-search" aria-hidden="true"></span>
                </button>
              </span>
              <input type="text" class="form-control" placeholder="Tìm kiếm...">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="navbar-item dropdown header-admin">
            <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              <div class="admin-title">
                <h5 class="item-title">Phan Đức Nghĩa</h5>
                <span>Admin</span>
              </div>
              <div class="admin-img">
                <img src="img/figure/admin.jpg" alt="Admin">
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="item-header">
                <h6 class="item-title">Steven Zone</h6>
              </div>
              <div class="item-content">
                <ul class="settings-list">
                  <li><a href="#"><i class="flaticon-user"></i>My Profile</a></li>
                  <li><a href="#"><i class="flaticon-list"></i>Task</a></li>
                  <li><a href="#"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>Message</a></li>
                  <li><a href="#"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
                  <li><a href="login.html"><i class="flaticon-turn-off"></i>Log Out</a></li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
      <!-- Sidebar Area Start Here -->
      <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
        <div class="mobile-sidebar-header d-md-none">
          <div class="header-logo">
            <a href="index.php"><img src="img/logo1.png" alt="logo"></a>
          </div>
        </div>
        <div class="sidebar-menu-content">
          <ul class="nav nav-sidebar-menu sidebar-toggle-view">
            <li class="nav-item sidebar-nav-item">
              <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Khách hàng</span></a>
              <ul class="nav sub-group-menu">
                <li class="nav-item">
                  <a href="all_customer.php" class="nav-link"><i class="fas fa-angle-right"></i>Danh sách khách hàng</a>
                </li>
                <li class="nav-item">
                  <a href="add_customer.php" class="nav-link"><i class="fas fa-angle-right"></i>Thêm khách hàng</a>
                </li>
              </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
              <a href="#" class="nav-link"><i class="flaticon-multiple-users-silhouette"></i><span>Sản phẩm</span></a>
              <ul class="nav sub-group-menu">
                <li class="nav-item">
                  <a href="all_product.php" class="nav-link"><i class="fas fa-angle-right"></i>Danh sách sản phẩm</a>
                </li>
                <li class="nav-item">
                  <a href="add_product.php" class="nav-link"><i class="fas fa-angle-right"></i>Thêm sản phẩm</a>
                </li>
              </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
              <a href="#" class="nav-link"><i class="flaticon-money"></i><span>Khuyến mại</span></a>
              <ul class="nav sub-group-menu">
                <li class="nav-item">
                  <a href="all_discount.php" class="nav-link"><i class="fas fa-angle-right"></i>Danh sách khuyến mại</a>
                </li>
                <li class="nav-item">
                  <a href="add_discount.php" class="nav-link"><i class="fas fa-angle-right"></i>Thêm khuyến mại</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!-- Sidebar Area End Here -->
      <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
          <h3>Khách hàng</h3>
          <ul>
            <li>
              <a href="index.html">Trang chủ</a>
            </li>
            <li>Chỉnh sửa khách hàng</li>
          </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Student Details Area Start Here -->
        <div class="card height-auto">
          <div class="card-body">
            <div class="heading-layout1">
              <div class="item-title">
                <h3></h3>
              </div>
            </div>
            <div class="single-info-details">
              <div class="item-content">
                <div class="info-table table-responsive">
                  <form class="new-added-form" method="post">
                    <div class="row">
                      <div class="col-12 form-group">
                        <label>Họ và tên</label>
                        <input name="customerName" type="text" required placeholder="" class="form-control" value="<?php echo $row['customerName']; ?>">
                      </div>
                      <div class="col-12 form-group">
                        <label>Mật khẩu</label>
                        <input name="pass" type="text" required placeholder="" class="form-control" value="<?php echo $row['pass']; ?>">
                      </div>
                      <div class="col-12 form-group">
                        <label>Email</label>
                        <input name="email" type="text" required placeholder="" class="form-control" value="<?php echo $row['email']; ?>">
                      </div>
                      <div class="col-12 form-group">
                        <label>Số điện thoại</label>
                        <input name="phone" type="text" required placeholder="" class="form-control" value="<?php echo $row['phone']; ?>">
                      </div>
                      <div class="col-12 form-group">
                        <label>Địa chỉ</label>
                        <input name="address" type="text" required placeholder="" class="form-control" value="<?php echo $row['address']; ?>">
                      </div>
                      <div class="col-12 form-group">
                        <button type="submit" name="smb" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Sửa</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Student Details Area End Here -->
      </div>
    </div>
    <!-- Page Area End Here -->
  </div>
  <!-- jquery-->
  <script src="js/jquery-3.3.1.min.js"></script>
  <!-- Plugins js -->
  <script src="js/plugins.js"></script>
  <!-- Popper js -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Select 2 Js -->
  <script src="js/select2.min.js"></script>
  <!-- Scroll Up Js -->
  <script src="js/jquery.scrollUp.min.js"></script>
  <!-- Custom Js -->
  <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/student-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2019 08:21:50 GMT -->

</html>
