
<?php
session_start();
ob_start();
include "../model/connect_db.php";
if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Đăng nhập tài khoản</h1>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="Post" >
                    <label>Username</label></br>
                    <input type="text" name="user" value="" /><br/>
                    <label>Password</label></br>
                    <input type="password" name="pass" value="" /></br>
                    <label>Email</label></br>
                    <input type="email" name="email" value="" /></br>
                    <br>
                    <input type="submit" name="dangnhap" value="Đăng nhập" />
                </form>
</body>
</html>