<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../content/css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="../content/css/header-footer.css">
    <link rel="stylesheet" href="../content/css/login.css">
    <link rel="stylesheet" href="../content/css/font.css">
</head>

<body>
    <main class="main">
        <div class="main-content">

            <a href="./index.php" class="main-heading"><span>DP</span>Flower</a>
            <div class="login">
                <div action="#" class="login-content">
                    <div class="login-head">
                        <h3 class="login-heading">Đăng nhập</h3>
                        <p class="login-desc">“Đi chính là để tiến hóa” – Pierre Bernardo</p>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="" id="" required="required" class="login_input" placeholder="TÊN NGƯỜI DÙNG">
                    </div>
                    <div class="inputbox">
                        <input type="password" name="" id="" required="required" class="login_input password" placeholder="MẬT KHẨU">
                        <i class="fa fa-eye input-icon eye-open "></i>
                    </div>
                    <div class="list-brand">
                        <div class="brand-item">
                            <i class="fab fa-facebook brand-icon"></i>
                        </div>
                        <div class="brand-item">
                            <i class="fab fa-twitter brand-icon"></i>
                        </div>
                        <div class="brand-item">
                            <img src="../content/images/figma/icon/google.png" alt="">
                        </div>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox" id="">
                        <label for="checkbox">Lưu đăng nhập</label>
                    </div>
                    <button type="submit" class="submit"><i class="fas fa-arrow-right submit-icon"></i></button>
                    <a href="#" class="link">TẠO TÀI KHOẢN</a>
                </div>
            </div>
        </div>
    </main>
    <!-- javacript -->
    <script>
        window.addEventListener("load", function() {
            const input = document.querySelector(".password");
            const inputIcon = document.querySelector(".input-icon");
            const eyeClose = document.querySelector(".eye-close");
            const eyeOpen = document.querySelector(".eye-open");

            inputIcon.addEventListener("click", function(event) {
                const inputType = input.getAttribute("type");
                // <i class="fas fa-eye-slash"></i>
                if (inputType === "password") {
                    input.setAttribute("type", "text");
                } else {
                    input.setAttribute("type", "password");
                }
            });
        })
    </script>
</body>

</html>