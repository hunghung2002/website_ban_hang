<?php
    session_start();
    include 'config.php';
    if(isset($_POST['submit']) && $_POST["username"] != '' && $_POST["email"] != '' && $_POST["password"] != '' && $_POST["rPassword"] ) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $rPassword = $_POST["rPassword"];
        $level = 0;
        if($password != $rPassword) {
            $_SESSION["thongbao"]= "Password nhập không chính xác";
            header("location:register.php");
            die();
        }
        $sql = "SELECT * FROM user WHERE username='$username' ";
        $old = mysqli_query($conn,$sql);
        $password = md5($password);
        if(mysqli_num_rows($old) > 0) {
            $_SESSION["thongbao"]= "Username đã tồn tại";
            header("location:register.php");
            die();
        }
        $sql = "INSERT INTO user (username,email,password,level) VALUES ('$username','$email','$password','$level')";
        mysqli_query($conn,$sql);
        $_SESSION["thongbao"]= "Đã đăng ký thành công";
        header("location:login.php");
    } else {
        $_SESSION["thongbao"]= "Vui lòng nhập lại thông tin";
        header("location:register.php");
    }
 ?>