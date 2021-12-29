<?php
    session_start();
    if(isset($_SESSION["thongbao"])) {
        echo $_SESSION["thongbao"];
        unset($_SESSION["thongbao"]);
    }
?>