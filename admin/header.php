<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../content/css/admin_style.css">
    <script src="../resources/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<body>
    <?php
    session_start();
    include '../model/connect_db.php';
    include '../model/function.php';
    if (!empty($_SESSION['current_user'])) { //Kiểm tra xem đã đăng nhập chưa?
    ?>
        <div id="admin-heading-panel">
            <div class="container">
                <div class="left-panel">
                    Xin chào <span>Admin</span>
                </div>
                <div class="right-panel">
                <img height="24" src="../content/images/home.png" />
                    <a href="../view/index.php">Trang chủ</a>
                    <img height="24" src="../content/images/poweroff.png" /> 
                    <a href="logout.php">Đăng xuất</a>
                </div>
            </div>
        </div>
        <div id="content-wrapper">
            <div class="container">
                <div class="left-menu">
                    <div class="menu-heading">Admin Menu</div>
                    <div class="menu-items">
                        <ul>
                            <li><a href="#">Thống Kê</a></li>
                            <li><a href="#">Tin tức</a></li>
                            <li><a href="product_listing.php">Sản phẩm</a></li>
                            <li><a href="#">Đơn hàng</a></li>
                        </ul>
                    </div>
                </div>
            <?php } ?>