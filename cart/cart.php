<?php session_start(); ?>
<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css" >
        <link rel="stylesheet" href="../content/css/font.css">
        <link rel="stylesheet" href="../content/css/reset.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="../content/css/header-footer.css">
        <link rel="stylesheet" href="../content/css/introduce.css">
    </head>
    <body>
        <?php
        include './connect_db.php';
        if (!isset($_SESSION["cart"])) {
            $_SESSION["cart"] = array();
        }
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case "add":
                    foreach ($_POST['quantity'] as $id => $quantity) {
                        $_SESSION["cart"][$id] = $quantity;
                    }
                    break;
            }
        }
        if (!empty($_SESSION["cart"])) {
            $products = mysqli_query($con, "SELECT * FROM `product` WHERE `id` IN (".implode(",", array_keys($_SESSION["cart"])).")");
        }
//        $result = mysqli_query($con, "SELECT * FROM `product` WHERE `id` = ".$_GET['id']);
//        $product = mysqli_fetch_assoc($result);
//        $imgLibrary = mysqli_query($con, "SELECT * FROM `image_library` WHERE `product_id` = ".$_GET['id']);
//        $product['images'] = mysqli_fetch_all($imgLibrary, MYSQLI_ASSOC);
        ?>
        <header class="header">
            <nav class="navbar">
                <div class="navbar-logo">
                    <a href="../view/index.php">
                        <img src="../content/images/dpflower/DP FLOWER STORE.png" alt="Logo">
                    </a>
                </div>
                <ul class="navbar-menu">
                <li><a href="index.php">Trang Chủ</a></li>
                <li class="has-submenu">
                    <a href="../view/tour.php">Hoa Tươi</a>
                    <ul class="submenu">
                        <li><a href="#">Hoa Ngày Cưới</a></li>
                        <li><a href="#">Hoa Valentine</a></li>
                        <li><a href="#">Lễ Giáng Sinh</a></li>
                        <li><a href="#">Ngày Của Mẹ</a></li>
                        <li><a href="#">Ngày Tựu Trường</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="../view/service.php">Hoa Theo Thiết Kế</a>
                    <!-- <ul class="submenu">
                        <li><a href="#">Vé Máy Bay</a></li>
                        <li><a href="#">Vé Visa </a></li>
                        <li><a href="#">Vận chuyển - Đưa đón</a></li>
                        <li><a href="">Khách Sạn -Lưu Trú</a></li>
                    </ul> -->
                </li>

                <li class="has-submenu">
                    <a href="#">Tin Tức </a>
                    <!-- <ul class="submenu">
                        <li><a href="#">Tin Trong Nước</a></li>
                        <li><a href="#">Tin Quốc Tế </a></li>

                    </ul> -->
                </li>
                <li class="has-submenu">
                    <a href="#">Ưu Đãi</a>
                    <!-- <ul class="submenu">
                        <li><a href="#">Hình Ảnh</a></li>
                        <li><a href="#">Video </a></li>

                    </ul> -->
                </li>
                <li><a href="contact.php">Liên Hệ</a></li>
                
               <li>
                   <div class="has-submenu">
                        <a href="../view/signup.php">Đăng Ký</a>
                    </div>
                </li>

              
                   <li> <a href="../view/login.php">Đăng Nhập</a>
                    <ul class="submenu">
                        <li><a href="../view/login.php">User</a></li>
                        <li><a href="../admin/index.php">Admin </a></li>
                    </ul>
                </li>

                <li><a href="#"><i class="fas fa-search"></i></a>Tìm Kiếm</li>
            </ul>
            </nav>
            <div class="header-banner">
                <div class="header-banner_content">
                    <h2 class="header-banner_heading">GIỎ HÀNG</h2>
                </div>
            </div>
        </header>
            <form id="cart-form" action="cart.php?action=submit" method="POST">
                <table>
                    <tr>
                        <th class="product-number">STT</th>
                        <th class="product-name">Tên sản phẩm</th>
                        <th class="product-img">Ảnh sản phẩm</th>
                        <th class="product-price">Đơn giá</th>
                        <th class="product-quantity">Số lượng</th>
                        <th class="total-money">Thành tiền</th>
                        <th class="product-delete">Xóa</th>
                    </tr>
                    <?php 
                    $num = 1;
                    if (isset($product)) {
                    while ($row = mysqli_fetch_array($product))
                    {} ?>
                    <tr>
                        <td class="product-number"><?=$num++;?></td>
                        <td class="product-name"><?=$row['name']?></td>
                        <td class="product-img"><img src="<?=$row['image']?>" /></td>
                        <td class="product-price"><?=$row['price']?></td>
                        <td class="product-quantity"><input type="text" value="<?=$_SESSION["cart"][$row['id']]?>" name="quantity[<?=$row['id']?>]" /></td>
                        <td class="total-money"><?=$row['price']?></td>
                        <td class="product-delete">Xóa</td>
                    </tr>
                    <?php 
                    $num++;
                    } ?>
                    <tr id="row-total">
                        <td class="product-number">&nbsp;</td>
                        <td class="product-name">Tổng tiền</td>
                        <td class="product-img">&nbsp;</td>
                        <td class="product-price">&nbsp;</td>
                        <td class="product-quantity">&nbsp;</td>
                        <td class="total-money">2.500.000</td>
                        <td class="product-delete">Xóa</td>
                    </tr>
                </table>
                <div id="form-button">
                    <input type="submit" name="update_click" value="Cập nhật" />
                </div>
                <hr>
                <div><label>Người nhận: </label><input type="text" value="" name="name" /></div>
                <div><label>Điện thoại: </label><input type="text" value="" name="phone" /></div>
                <div><label>Địa chỉ: </label><input type="text" value="" name="address" /></div>
                <div><label>Ghi chú: </label><textarea name="note" cols="50" rows="7" ></textarea></div>
                <input type="submit" name="order_click" value="Đặt hàng" />
            </form>
        </div>
        <footer class="footer">
        <div class="footer-content">
            <div class="fst">
                <h4 class="fst-heading"><span>DP</span>FLOWER</h4>
                <p>Công viên phần mêm Quang Trung, Q.12,<br>P.12, Q.10, TP.HCM, Việt Nam</p>
                <p>Điện Thoại:0373863708</p>
                <p>Email: shophoatuoidpflower@gmail.com</p>
                <div class="list-icon">
                    <a href="#" class="icon-link"><i class="fab fa-pinterest"></i></a>
                    <a href="#" class="icon-link"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="icon-link"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="icon-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="icon-link"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="icon-link"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="fst">
                <h4 class="fst-head">Hoa Tươi</h4>
                <p>Hoa Khai Trương</p>
                <p>Hoa Tiệc Cưới</p>
                <p>Hoa Tựu Trường</p>
                <p>Lẵng Hoa</p>
            </div>
            <div class="fst">
                <h4 class="fst-head">Hoa Theo Thiết Kế</h4>
                <p>Lẵng Hoa</p>
                <p>Hoa Sinh Nhật</p>
                <p>Hoa Valentine</p>
                <p>Ngày Của Mẹ</p>
            </div>
            <div class="fst">
                <h4 class="fst-head">Hình Ảnh</h4>
                <div class="images">
                    <a href="#">
                        <img src="../content/images/dpflower/sp6.png" alt="" class="img">
                    </a>
                
              
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-sub">
        <div class="footer-sub_content">
            <div class="footer-sub_right"> shophoatuoidpflower@gmail.com</div>
        </div>
    </div>
    <script src="../content/style.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>