<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../content/css/font.css">
    <link rel="stylesheet" href="../content/css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="../content/css/header-footer.css">
    <link rel="stylesheet" href="../content/css/tour.css">
    <link rel="stylesheet" href="../content/css/news.css">
</head>

<body>
    <!-- header start -->
    <header class="header">
        <nav class="navbar">
            <div class="navbar-logo">
                <a href="index.php">
                    <img src="../content/images/dpflower/DP FLOWER STORE.png" alt="Logo">
                </a>
            </div>
            <ul class="navbar-menu">
                <li><a href="index.php">Trang Chủ</a></li>
                <li class="has-submenu">
                    <a href="tour.php">Hoa Tươi</a>
                    <ul class="submenu">
                        <li><a href="#">Hoa Ngày Cưới</a></li>
                        <li><a href="#">Hoa Valentine</a></li>
                        <li><a href="#">Lễ Giáng Sinh</a></li>
                        <li><a href="#">Ngày Của Mẹ</a></li>
                        <li><a href="#">Ngày Tựu Trường</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="service.php">Hoa Theo Thiết Kế</a>
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
                        <a href="./signup.php">Đăng Ký</a>
                    </div>
                </li>

              
                   <li> <a href="login.php">Đăng Nhập</a>
                    <ul class="submenu">
                        <li><a href="login.php">User</a></li>
                        <li><a href="../admin/index.php">Admin </a></li>
                    </ul>
                </li>

                <li><a href="#"><i class="fas fa-search"></i></a>Tìm Kiếm</li>
            </ul>
        </nav>
        <div class="header-banner">
            <div class="header-banner_content">
                <h2 class="header-banner_heading">Sản Phẩm Nổi Bật</h2>
            </div>
        </div>
    </header>
    <!-- header end -->
    <main class="main">
        <!-- cards start -->
        <div class="main-cards">
        <form action="../cart/cart.php" method="post">
            <a href="product.php" class="main-card">
                <div class="card-image">
                    <img src="../content/images/dpflower/sp11.png" alt="" class="card-img">
                    <span class="card-price">580.000 vnđ</span>
                </div>     
           <div class="card-content">
                    <h3 class="card-heading">Cherry Blossom</h3>
                    <div class="card-text">
                        <i class="far fa-clock card-icon"></i>
                        <p>4 ngày</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-calendar card-icon"></i>
                        <p>Hoa anh đào tượng trưng cho sự thanh cao, tính khiêm nhường, nhẫn nhịn.</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-map card-icon"></i>
                        <p>Địa điểm: Đà Nẵng</p>
                    </div>
                    <input type="submit" name="dathang" value="Mua Ngay">
                </div>
           </form>
            </a>
            <form action="card.php" method="post">
            <a href="product.php" class="main-card">
                <div class="card-image">
                    <img src="../content/images/dpflower/sp12.png" alt="" class="card-img">
                    <span class="card-price">900.000vnđ </span>

                </div>
                <div class="card-content">
                    <h3 class="card-heading">Carnation</h3>
                    <div class="card-text">
                        <i class="far fa-clock card-icon"></i>
                        <p>5 ngày</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-calendar card-icon"></i>
                        <p>Hoa cẩm chướng tượng trưng cho sự ái mộ, sắc đẹp, tình yêu của phụ nữ.</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-map card-icon"></i>
                        <p>Địa điểm: TP.HCM</p>
                    </div>
                    <input type="submit" name="dathang" value="Mua Ngay">
                </div>
            </a>
            </form>
            <form action="card.php" method="post">
            <a href="product.php" class="main-card">
                <div class="card-image">
                    <img src="../content/images/dpflower/sp13.png" alt="" class="card-img">
                    <span class="card-price">900.000vnđ </span>

                </div>
                <div class="card-content">
                    <h3 class="card-heading">Delphis flower</h3>
                    <div class="card-text">
                        <i class="far fa-clock card-icon"></i> 
                        <p>7 ngày</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-calendar card-icon"></i>
                        <p> Hoa thược dược biểu tượng cho sự chung thủy</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-map card-icon"></i>
                        <p>Địa điểm: Hội An</p>
                    </div>
                    <input type="submit" name="dathang" value="Mua Ngay">
                </div>
            </a>
            </form>
            <form action="card.php" method="post">
            <a href="product.php" class="main-card">
                <div class="card-image">
                    <img src="../content/images/dpflower/sp14.png" alt="" class="card-img">
                    <span class="card-price">1.000.000vnđ </span>

                </div>
                <div class="card-content">
                    <h3 class="card-heading">Peach blossom</h3>
                    <div class="card-text">
                        <i class="far fa-clock card-icon"></i>
                        <p>7 ngày 6 đêm</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-calendar card-icon"></i>
                        <p> Hoa đào biểu tượng cho sự an khang thịnh vượng.</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-map card-icon"></i>
                        <p>Địa điểm: TP.Phan Thiết</p>
                    </div>
                    <input type="submit" name="dathang" value="Mua Ngay">
                </div>
            </a>
            </form>
            <form action="card.php" method="post">
            <a href="product.php" class="main-card">
                <div class="card-image">
                    <img src="../content/images/dpflower/sp15.png" alt="" class="card-img">
                    <span class="card-price">700.000vnđ </span>

                </div>
                <div class="card-content">
                    <h3 class="card-heading">Gerbera</h3>
                    <div class="card-text">
                        <i class="far fa-clock card-icon"></i>
                        <p>2 ngày 1 đêm</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-calendar card-icon"></i>
                        <p>Hoa đồng tiền tượng trưng cho hạnh phúc, tùy màu sắc khác nhau mà có ý nghĩa khác nhau.</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-map card-icon"></i>
                        <p>Địa điểm: TP.Cần Thơ</p>
                    </div>
                    <input type="submit" name="dathang" value="Mua Ngay">
                </div>
            </a>
            </form>
            
            <a href="product.php" class="main-card">
                <div class="card-image">
                    <img src="../content/images/dpflower/sp16.png" alt="" class="card-img">
                    <span class="card-price">400.000vnđ </span>

                </div>
                <div class="card-content">
                    <h3 class="card-heading">Gladiolus</h3>
                    <div class="card-text">
                        <i class="far fa-clock card-icon"></i>
                        <p>5 ngày</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-calendar card-icon"></i>
                        <p>Hoa lay ơn biểu tượng của sự tưởng nhớ.</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-map card-icon"></i>
                        <p>Địa điểm: Hà Giang</p>
                    </div>
                    <input type="submit" name="dathang" value="Mua Ngay">
                </div>
            </a>
            <a href="product.php" class="main-card">
                <div class="card-image">
                    <img src="../content/images/dpflower/sp17.png" alt="" class="card-img">
                    <span class="card-price">130.000vnđ </span>

                </div>
                <div class="card-content">
                    <h3 class="card-heading">Cockscomb</h3>
                    <div class="card-text">
                        <i class="far fa-clock card-icon"></i>
                        <p>3 ngày</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-calendar card-icon"></i>
                        <p> Hoa mào gà biểu tượng cho sự hi sinh cao cả</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-map card-icon"></i>
                        <p>Địa điểm: TP.HCM</p>
                    </div>
                    <input type="submit" name="dathang" value="Mua Ngay">
                </div>
            </a>
            <a href="product.php" class="main-card">
                <div class="card-image">
                    <img src="../content/images/dpflower/sp18.png" alt="" class="card-img">
                    <span class="card-price">190.000vnđ </span>

                </div>
                <div class="card-content">
                    <h3 class="card-heading">Narcissus</h3>
                    <div class="card-text">
                        <i class="far fa-clock card-icon"></i>
                        <p>2 ngày</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-calendar card-icon"></i>
                        <p>Hoa thuỷ tiên biểu tượng của sự quý phái, kiêu sa</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-map card-icon"></i>
                        <p>Địa điểm: Tây Ninh</p>
                    </div>
                    <input type="submit" name="dathang" value="Mua Ngay">
                </div>
            </a>
            <a href="product.php" class="main-card">
                <div class="card-image">
                    <img src="../content/images/dpflower/sp19.png" alt="" class="card-img">
                    <span class="card-price">900.000vnđ </span>

                </div>
                <div class="card-content">
                    <h3 class="card-heading">Snapdragon</h3>
                    <div class="card-text">
                        <i class="far fa-clock card-icon"></i>
                        <p>5 ngày</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-calendar card-icon"></i>
                        <p>Hoa mõm chó biểu tượng cho cả sự lừa dối và sự thanh tao/p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-map card-icon"></i>
                        <p>Địa điểm: Hà Nội</p>
                    </div>
                    <input type="submit" name="dathang" value="Mua Ngay">
                </div>
            </a>
        </div>
        <!-- cards end -->
        <div class="pagination">
        <a href="#" class="prev">Previous</a>
        <a href="#" class="page">1</a>
        <a href="#" class="page">2</a>
        <a href="#" class="page active">3</a>
        <a href="#" class="page">4</a>
        <a href="#" class="page">5</a>
        <a href="#" class="next">Next</a>
    </div>
    </main>
    <!-- footer start -->
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
</body>

</html>