<script>alert('Đẵ đăng nhập thành công')</script>
<?php
    session_start();
    $logined=0;
    if(!isset($_SESSION['luottruycap'])) $_SESSION['luottruycap']=0;
    else $_SESSION['luottruycap']+=1;

    if(isset($_COOKIE['user'])&&isset($_COOKIE['pass'])){
        echo "Cookie đã đăng ký là: ".$_COOKIE['user']." - ".$_COOKIE['pass'];
    }

    if(isset($_GET['delc'])&&($_GET['delc']==1)){
        setcookie("user","",time()-(86400*7));
        setcookie("pass","",time()-(86400*7));
        echo "<br><font color='red'>Bạn đã xóa cookie</font>";
    }

    if(isset($_POST['login'])&&($_POST['login'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        if(($user=="demo")&&($pass=="demo")){
            $_SESSION['user']=$user;
            $_SESSION['pass']=$pass;
            $logined=1;
            $msg= "<br><font color='blue'>Các bạn đăng nhập thành công</font>";
        }else{
            $logined=0;
            $msg= "<br><font color='red'>Vui lòng đăng nhập</font>";
        }
        if(isset($_POST['ghinho'])&&($_POST['ghinho'])){
            setcookie("user",$user,time()+(86400*7));
            setcookie("pass",$pass,time()+(86400*7));
            $msgcookie="<br>Đã ghi nhận cookie!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>TGDD(LOGIN)</title>
</head>
<body>
    <header>
        <img src="img/bgr1.png" alt="">
    </header>
    <nav>
        <div class="container">
            <ul>
                <li>
                    <a href="index.html"><img style="width: 150px" src="img/logo-the-gioi-di-dong-2.jpg" alt=""></a>
                </li>
                <li id="adress-form">
                    <a href="#">Hà Nội<i class="fas fa-sort-down"></i></a>
                </li>
                <li>
                    <input type="text" placeholder="Bạn tìm gì.......">
                    <i class="fas fa-search"></i>
                </li>
                <li>
                    <a href=""></a><button><i class="fas fa-shopping-cart"></i>Giỏ hàng</button></li>
                <li><a href="">Lịch sử <br> đơn hàng</a></li>
                <li><a href=""><span class="btn-content"><span class="btn-top"></span></span> Mua thẻ nạp ngay</a></li>
                <li><a href="">24h công nghệ</a></li>
                <li><a href="">Hỏi đáp</a></li>
                <li><a href="">Game app</a></li>
                <li><a href="logout_submit.php">Đăng Xuất</a></li>
                <li><a href="login.php">Đăng nhập</a></li>
                <div class="adress-form">
                    <div class="adress-form-content">
                        <h2>Chọn địa chỉ nhận hàng <span id="adress-close">x Đóng</span></h2>
                        <form action="">
                            <p>Chọn đầy đủ địa chỉ nhận hàng để biết chính xác thời gian giao</p>
                            <select name="">
                                <option value="#">Chọn địa điểm</option>
                                <option value="#">Hà Nội</option>
                            </select>
                            <select name="">
                                <option value="#">Chọn Quận\Huyện</option>
                                <option value="#">Hà Nội</option>
                            </select>
                            <select name="">
                                <option value="#">Chọn Phường\Xã</option>
                                <option value="#">Hà Nội</option>
                            </select>
                            <input type="text" placeholder="Số nhà ,Tên đường" name="" id="">
                            <button>Xác nhận</button>
                        </form>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
    <section class="menu-bar" style="margin-top: -16px;">
        <div class="container">
            <div class="menu-bar-content">
                <ul>
                    <li><a href=""><i class="fas fa-mobile-alt"></i>Điện thoại</a></li>
                    <li><a href=""><i class="fas fa-laptop"></i>Laptop</a></li>
                    <li><a href=""><i class="fas fa-tablet-alt"></i>Tablet</a></li>
                    <li><a href=""><i class="fas fa-headphones"></i>Phụ kiện<i style="margin-left: 4px;" class="fas fa-sort-down"></i></a>
                        <div class="submenu">
                            <ul>
                                <li><a href="">PHỤ KIỆN DI ĐỘNG</a></li>
                                <li><a href="">Pin sạc dự phòng</a></li>
                                <li><a href="">Sạc, cáp</a></li>
                                <li><a href="">Miếng dán màn hình</a></li>
                                <li><a href="">Ốp lưng điện thoại</a></li>
                                <li><a href="">Ốp lưng điện máy tính bản</a></li>
                                <li><a href="">Gậy tự sướng</a></li>
                                <li><a href="">Giá đỡ laptop, điện thoại</a></li>
                                <li><a href="">Đế, móc điện thoại</a></li>
                                <li><a href="">Túi chống nước</a></li>
                                <li><a href="">Túi đựng Airpods</a></li>
                                <li><a href="">Phụ kiện Tablet</a></li>
                                <li><a href="">Airtag</a></li>

                            </ul>
                        </div>
                    </li>
                    <li><a href=""><i class="far fa-clock"></i>Đồng hồ thông minh</a></li>
                    <li><a href=""><i class="far fa-clock"></i>Đồng hồ thời trang</a></li>
                    <li><a href=""><i class="fas fa-desktop"></i>PC, Máy in<i style="margin-left: 4px;" class="fas fa-sort-down"></i></a>
                        <div class="submenu">
                            <ul>
                                <li><a href="">Máy in</a></li>
                                <li><a href="">Mực in</a></li>
                                <li><a href="">Màn hình máy tính</a></li>
                                <li><a href="">Máy tính để bàn</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="">Máy cũ giá rẻ</a></li>
                    <li><a href="">Sim, thẻ cào</a></li>
                    <li><a href="">Trả góp điện nước</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Slider -->
    <section class="slider">
        <div class="container">
            <div class="slider-content">
                <div class="slider-content-left">
                    <div class="slider-content-left-top-container">
                        <div class="slider-content-left-top ">
                            <a href=""><img src="img-slider/slider1.png" alt=""></a>
                            <a href=""><img src="img-slider/slider2.png" alt=""></a>
                            <a href=""><img src="img-slider/slider3.png" alt=""></a>
                            <a href=""><img src="img-slider/slider4.png" alt=""></a>
                            <a href=""><img src="img-slider/slider5.png" alt=""></a>

                        </div>
                        <div class="slider-content-left-top-btn">
                            <i class="fas fa-angle-left"></i>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </div>
                    <div class="slider-content-left-bottom">
                        <li class="active font-bottom">Sale Giảm Đến 55%</li>
                        <li class="font-bottom">Iphone 13 Pro Giảm Đến 4 Triệu</li>
                        <li class="font-bottom">Samsun Giảm Đến 8 Triệu</li>
                        <li class="font-bottom">Xioami 11T Series</li>
                        <li class="font-bottom">Đồng Hồ Thời Trang </li>
                    </div>
                </div>
                <div class="slider-content-right">
                    <li>
                        <a href=""><img src="img-slider/slider-r1.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href=""><img src="img-slider/slider-r20.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href=""><img src="img-slider/slider-r3.png" alt=""></a>
                    </li>
                    <li>
                        <a href=""><img src="img-slider/slider-r4.jpg" alt=""></a>
                    </li>
                </div>
            </div>
        </div>
    </section>
    <section class="baner-one">
        <div class="container">
            <img src="img/baner1.png" alt="">
        </div>
    </section>
    <section class="slider-product-one">
        <div class="container">
            <div class="slider-product-one-content">
                <div class="slider-product-one-content-title">
                    <h2>Săn Sale Online Mỗi Ngày</h2>
                </div>
                <div class="slider-product-one-content-container" style="height: 537px;">
                    <div class="slider-product-one-content-items-content">
                        <div class="slider-product-one-content-items">
                            <div class="slider-product-one-content-item">
                                <img src="img/iphone-13-pro-max.jpg" alt="">
                                <div class="slider-product-one-content-item-text">
                                    <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                    <li>Iphone 13 Pro Max 128GB</li>
                                    <li>Online giá rẻ</li>
                                    <li><a href="">33 <sup>$</sup></a></li>
                                    <li>32 <sup>$</sup></li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>                      
                                </div>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Iphone 13 Pro Max 128GB">
                                    <input type="hidden" name="gia" value="33">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="img/samsung-galaxy-s20.jpg" alt="">
                                <div class="slider-product-one-content-item-text">
                                    <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                    <li>Samsung Galaxy s20</li>
                                    <li>Online giá rẻ</li>
                                    <li><a href="">20 <sup>$</sup></a></li>
                                    <li>17 <sup>$</sup></li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </div>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Samsung Galaxy s20">
                                    <input type="hidden" name="gia" value="17">
                                    <input type="hidden" name="hinh" value="samsung-galaxy-s20.jpg">
                                </form>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="img/samsung-galaxy-s21.jpg" alt="">
                                <div class="slider-product-one-content-item-text">
                                    <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                    <li>Samsung Galaxy s21</li>
                                    <li>Online giá rẻ</li>
                                    <li><a href="">25 <sup>$</sup></a></li>
                                    <li>23 <sup>$</sup></li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </div>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Samsung Galaxy s21">
                                    <input type="hidden" name="gia" value="23">
                                    <input type="hidden" name="hinh" value="samsung-galaxy-s21.jpg">
                                </form>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="img/xiaomi-11t-grey.jpg" alt="">
                                <div class="slider-product-one-content-item-text">
                                    <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                    <li>Xiaomi 11t</li>
                                    <li>Online giá rẻ</li>
                                    <li><a href="">20 <sup>$</sup></a></li>
                                    <li>15 <sup>$</sup></li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </div>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Xiaomi 11t">
                                    <input type="hidden" name="gia" value="15">
                                    <input type="hidden" name="hinh" value="xiaomi-11t-grey.jpg">
                                </form>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="img/oppo-reno6-z-5g.jpg" alt="">
                                <div class="slider-product-one-content-item-text">
                                    <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                    <li>Oppo Reno6 z</li>
                                    <li>Online giá rẻ</li>
                                    <li><a href="">32 <sup>$</sup></a></li>
                                    <li>26 <sup>$</sup></li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </div>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Oppo Reno6 z">
                                    <input type="hidden" name="gia" value="26">
                                    <input type="hidden" name="hinh" value="oppo-reno6-z-5g.jpg">
                                </form>
                            </div>
                        </div>
                        <div class="slider-product-one-content-items">
                            <div class="slider-product-one-content-item">
                                <img src="img/iphone-13-pro-max.jpg" alt="">
                                <div class="slider-product-one-content-item-text">
                                    <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                    <li>Iphone 13 Pro Max 128GB</li>
                                    <li>Online giá rẻ</li>
                                    <li><a href="">33 <sup>$</sup></a></li>
                                    <li>32 <sup>$</sup></li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </div>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="img/samsung-galaxy-s20.jpg" alt="">
                                <div class="slider-product-one-content-item-text">
                                    <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                    <li>Iphone 13 Pro Max 128GB</li>
                                    <li>Online giá rẻ</li>
                                    <li><a href="">33 <sup>$</sup></a></li>
                                    <li>32 <sup>$</sup></li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </div>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="img/samsung-galaxy-s21.jpg" alt="">
                                <div class="slider-product-one-content-item-text">
                                    <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                    <li>Iphone 13 Pro Max 128GB</li>
                                    <li>Online giá rẻ</li>
                                    <li><a href="">33 <sup>$</sup></a></li>
                                    <li>32 <sup>$</sup></li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </div>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="img/xiaomi-11t-grey.jpg" alt="">
                                <div class="slider-product-one-content-item-text">
                                    <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                    <li>Iphone 13 Pro Max 128GB</li>
                                    <li>Online giá rẻ</li>
                                    <li><a href="">33 <sup>$</sup></a></li>
                                    <li>32 <sup>$</sup></li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </div>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="img/oppo-reno6-z-5g.jpg" alt="">
                                <div class="slider-product-one-content-item-text">
                                    <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                    <li>Iphone 13 Pro Max 128GB</li>
                                    <li>Online giá rẻ</li>
                                    <li><a href="">33 <sup>$</sup></a></li>
                                    <li>32 <sup>$</sup></li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </div>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                            </div>
                        </div>
                        <div class="slider-product-one-content-items">
                            <div class="slider-product-one-content-item">
                                <img src="img/iphone-13-pro-max.jpg" alt="">
                                <div class="slider-product-one-content-item-text">
                                    <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                    <li>Iphone 13 Pro Max 128GB</li>
                                    <li>Online giá rẻ</li>
                                    <li><a href="">33 <sup>$</sup></a></li>
                                    <li>32 <sup>$</sup></li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </div>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="img/samsung-galaxy-s20.jpg" alt="">
                                <div class="slider-product-one-content-item-text">
                                    <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                    <li>Iphone 13 Pro Max 128GB</li>
                                    <li>Online giá rẻ</li>
                                    <li><a href="">33 <sup>$</sup></a></li>
                                    <li>32 <sup>$</sup></li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </div>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="img/samsung-galaxy-s21.jpg" alt="">
                                <div class="slider-product-one-content-item-text">
                                    <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                    <li>Iphone 13 Pro Max 128GB</li>
                                    <li>Online giá rẻ</li>
                                    <li><a href="">33 <sup>$</sup></a></li>
                                    <li>32 <sup>$</sup></li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </div>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="img/xiaomi-11t-grey.jpg" alt="">
                                <div class="slider-product-one-content-item-text">
                                    <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                    <li>Iphone 13 Pro Max 128GB</li>
                                    <li>Online giá rẻ</li>
                                    <li><a href="">33 <sup>$</sup></a></li>
                                    <li>32 <sup>$</sup></li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </div>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="img/oppo-reno6-z-5g.jpg" alt="">
                                <div class="slider-product-one-content-item-text">
                                    <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                    <li>Iphone 13 Pro Max 128GB</li>
                                    <li>Online giá rẻ</li>
                                    <li><a href="">33 <sup>$</sup></a></li>
                                    <li>32 <sup>$</sup></li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </div>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="slider-product-one-content-btn">
                        <i class="fas fa-angle-left fa-angle-left-two"></i>
                        <i class="fas fa-angle-right fa-angle-right-two"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product gallery -->
    <section class="product-gallery-one">
        <div class="container">
            <div class="product-gallery-one-content">
                <div class="product-gallery-one-content-title">
                    <h2>ĐIỆN THOẠI NỔI BẬT NHẤT</h2>
                    <ul>
                        <li><a href="">Iphone 13 Series</a></li>
                        <li><a href="">Samsung Galaxy A52s</a></li>
                        <li><a href="">Oppo Reno6</a></li>
                        <li><a href="">Xem tất cả</a></li>
                    </ul>
                </div>
                <div class="product-gallery-one-content-product">
                    <div class="product-gallery-one-content-product-item">
                        <img src="img/pr1.jpg" alt="">
                        <div class="product-gallery-one-content-product-item-text">
                            <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                            <li>Iphone 13 Pro Max 128GB</li>
                            <li>Online giá rẻ</li>
                            <li><a href="">33 <sup>$</sup></a></li>
                            <li>32 <sup>$</sup></li>
                            <li>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </li>
                        </div>
                        <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                    </div>
                    <div class="product-gallery-one-content-product-item">
                        <img src="img/pr3.jpg" alt="">
                        <div class="product-gallery-one-content-product-item-text">
                            <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                            <li>Iphone 13 Pro Max 128GB</li>
                            <li>Online giá rẻ</li>
                            <li><a href="">33 <sup>$</sup></a></li>
                            <li>32 <sup>$</sup></li>
                            <li>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </li>
                        </div>
                        <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                    </div>
                    <div class="product-gallery-one-content-product-item">
                        <img src="img/pr4.jpg" alt="">
                        <div class="product-gallery-one-content-product-item-text">
                            <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                            <li>Iphone 13 Pro Max 128GB</li>
                            <li>Online giá rẻ</li>
                            <li><a href="">33 <sup>$</sup></a></li>
                            <li>32 <sup>$</sup></li>
                            <li>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </li>
                        </div>
                        <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                    </div>
                    <div class="product-gallery-one-content-product-item">
                        <img src="img/pr5.jpg" alt="">
                        <div class="product-gallery-one-content-product-item-text">
                            <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                            <li>Iphone 13 Pro Max 128GB</li>
                            <li>Online giá rẻ</li>
                            <li><a href="">33 <sup>$</sup></a></li>
                            <li>32 <sup>$</sup></li>
                            <li>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </li>
                        </div>
                        <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                    </div>
                    <div class="product-gallery-one-content-product-item">
                        <img src="img/pr6.jpg" alt="">
                        <div class="product-gallery-one-content-product-item-text">
                            <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                            <li>Iphone 13 Pro Max 128GB</li>
                            <li>Online giá rẻ</li>
                            <li><a href="">33 <sup>$</sup></a></li>
                            <li>32 <sup>$</sup></li>
                            <li>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </li>
                        </div>
                        <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                    </div>
                    <div class="product-gallery-one-content-product">
                        <div class="product-gallery-one-content-product-item">
                            <img src="img/pr1.jpg" alt="">
                            <div class="product-gallery-one-content-product-item-text">
                                <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                <li>Iphone 13 Pro Max 128GB</li>
                                <li>Online giá rẻ</li>
                                <li><a href="">33 <sup>$</sup></a></li>
                                <li>32 <sup>$</sup></li>
                                <li>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </li>
                            </div>
                            <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                        </div>
                        <div class="product-gallery-one-content-product-item">
                            <img src="img/pr3.jpg" alt="">
                            <div class="product-gallery-one-content-product-item-text">
                                <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                <li>Iphone 13 Pro Max 128GB</li>
                                <li>Online giá rẻ</li>
                                <li><a href="">33 <sup>$</sup></a></li>
                                <li>32 <sup>$</sup></li>
                                <li>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </li>
                            </div>
                            <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                        </div>
                        <div class="product-gallery-one-content-product-item">
                            <img src="img/pr4.jpg" alt="">
                            <div class="product-gallery-one-content-product-item-text">
                                <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                <li>Iphone 13 Pro Max 128GB</li>
                                <li>Online giá rẻ</li>
                                <li><a href="">33 <sup>$</sup></a></li>
                                <li>32 <sup>$</sup></li>
                                <li>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </li>
                            </div>
                            <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                        </div>
                        <div class="product-gallery-one-content-product-item">
                            <img src="img/pr5.jpg" alt="">
                            <div class="product-gallery-one-content-product-item-text">
                                <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                <li>Iphone 13 Pro Max 128GB</li>
                                <li>Online giá rẻ</li>
                                <li><a href="">33 <sup>$</sup></a></li>
                                <li>32 <sup>$</sup></li>
                                <li>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </li>
                            </div>
                            <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                        </div>
                        <div class="product-gallery-one-content-product-item">
                            <img src="img/xiaomi-11t-grey.jpg" alt="">
                            <div class="product-gallery-one-content-product-item-text">
                                <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                <li>Iphone 13 Pro Max 128GB</li>
                                <li>Online giá rẻ</li>
                                <li><a href="">33 <sup>$</sup></a></li>
                                <li>32 <sup>$</sup></li>
                                <li>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </li>
                            </div>
                            <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                        </div>
                    </div>
                </div>
    </section>
    <!-- Product gallery two -->
    <section class="product-gallery-two">
        <div class="container">
            <div class="product-gallery-two-content">
                <div class="product-gallery-two-content-right">
                    <img src="img/rg1_1.png" alt="">
                </div>
                <div class="product-gallery-two-content-left">
                    <div class="product-gallery-two-content-left-top">
                        <li class="active">Đồng hồ thông minh</li>
                        <li>Đồng hồ thời trang nam</li>
                        <li>Đồng hồ thời trang nữ</li>
                        <li>Đồng hồ trẻ em</li>
                        <li><a href="">Xem tất cả</a><i class="fas fa-caret-right"></i></li>
                    </div>
                    <div class="product-gallery-two-content-left-bottom">
                        <div class="product-gallery-two-content-left-bottom-item">
                            <img src="img/pg1.jpg" alt="">
                            <div class="product-gallery-two-content-left-bottom-item-text">
                                <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                <li>Samsung Galaxy Watch 3 </li>
                                <li>Có chống nước</li>
                                <li>Có nghe gọi</li>
                                <li><a href="">9 <sup>$</sup>-50%</a></li>
                                <li>4 <sup>$</sup></li>
                                <li>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </li>
                            </div>
                            <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                        </div>
                        <div class="product-gallery-two-content-left-bottom-item">
                            <img src="img/pg2.jpg" alt="">
                            <div class="product-gallery-two-content-left-bottom-item-text">
                                <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                <li>Samsung Galaxy Watch 3 </li>
                                <li>Có chống nước</li>
                                <li>Có nghe gọi</li>
                                <li><a href="">9 <sup>$</sup>-50%</a></li>
                                <li>4 <sup>$</sup></li>
                                <li>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </li>
                            </div>
                            <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                        </div>
                        <div class="product-gallery-two-content-left-bottom-item">
                            <img src="img/pg3.jpg" alt="">
                            <div class="product-gallery-two-content-left-bottom-item-text">
                                <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                <li>Samsung Galaxy Watch 3 </li>
                                <li>Có chống nước</li>
                                <li>Có nghe gọi</li>
                                <li><a href="">9 <sup>$</sup>-50%</a></li>
                                <li>4 <sup>$</sup></li>
                                <li>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </li>
                            </div>
                            <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                        </div>
                        <div class="product-gallery-two-content-left-bottom-item">
                            <img src="img/pg4.jpg" alt="">
                            <div class="product-gallery-two-content-left-bottom-item-text">
                                <li><img src="img/icon1.png" alt="">Giáng sinh giá xịn</li>
                                <li>Samsung Galaxy Watch 3 </li>
                                <li>Có chống nước</li>
                                <li>Có nghe gọi</li>
                                <li><a href="">9 <sup>$</sup>-50%</a></li>
                                <li>4 <sup>$</sup></li>
                                <li>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </li>
                            </div>
                            <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input style="padding: 3px; margin-top:10px; background: #ef410c; border-radius: 5px; border: 1px solid #fff; color:#fff;" type="submit" name="addcart" value="Mua ngay">
                                    <input type="hidden" name="tensp" value="Đồng hồ">
                                    <input type="hidden" name="gia" value="10">
                                    <input type="hidden" name="hinh" value="iphone-13-pro-max.jpg">
                                </form>
                        </div>
                    </div>
                    <div class="slider-product-one-content-btn">
                        <i class="fas fa-angle-left fa-angle-left-two"></i>
                        <i class="fas fa-angle-right fa-angle-right-two"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="trademark" style="margin-top: 30px;">
            <h4 class="title-layout">CHUYÊN TRANG THƯƠNG HIỆU</h4>
            <div class="trademark-slider owl-carousel owl-loaded owl-drag" data-size="3">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="display: flex;transform: translate3d(0px, 0px, 0px);object-fit: cover; transition: all 0s ease 0s; width: 1221px;">
                        <div class="owl-item active" style="width: 396.667px; margin-right: 10px;">
                            <a aria-label="slide" data-cate="0" data-place="1550" href="/apple" onclick="jQuery.ajax({ url: '/bannertracking?bid=45933&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img loading="lazy" class="owl-lazy lazyloaded" data-src="//cdn.tgdd.vn/2021/10/banner/appleDT-390x210-1.png" alt="iphone" src="https://cdn.tgdd.vn/2021/10/banner/appleDT-390x210-1.png"></a>
                        </div>
                        <div class="owl-item active" style="width: 396.667px; margin-right: 10px;">
                            <a aria-label="slide" data-cate="0" data-place="1550" href="/lenovo" onclick="jQuery.ajax({ url: '/bannertracking?bid=48820&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img loading="lazy" class="owl-lazy lazyloaded" data-src="//cdn.tgdd.vn/2021/12/banner/Laptopver2-390x210-1.png" alt="Laptop Lenovo" src="https://cdn.tgdd.vn/2021/12/banner/Laptopver2-390x210-1.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class="footer" style="margin-top: 10px;">
        <section class="clearfix footer__top">
            <div class="footer__col">
                <ul class="f-listmenu">
                    <li><a rel="nofollow" href="/lich-su-mua-hang">Lịch sử mua hàng</a></li>
                    <li><a rel="nofollow" href="/daily">Cộng tác bán hàng cùng TGDĐ</a></li>
                    <li><a rel="nofollow" href="/tra-gop">Tìm hiểu về mua trả góp</a></li>
                    <li><a rel="nofollow" href="/bao-hanh">Chính sách bảo hành</a></li>
                    <li><a href="javascript:void(0)" class="arrow showtaga">Xem thêm</a></li>
                    <li class="hidden"><a rel="nofollow" href="/chinh-sach-bao-hanh-san-pham">Chính sách đổi trả</a></li>
                    <li class="hidden"><a rel="nofollow" href="/giao-hang">Giao hàng &amp; Thanh toán</a></li>
                    <li class="hidden"><a rel="nofollow" href="/huong-dan-mua-hang">Hướng dẫn mua online</a></li>
                    <li class="hidden"><a rel="nofollow" href="/b2b">Bán hàng doanh nghiệp</a></li>
                    <li class="hidden"><a rel="nofollow" href="/phieu-mua-hang">Phiếu mua hàng</a></li>
                    <li class="hidden"><a rel="nofollow" href="http://hddt.thegioididong.com">In hóa đơn điện tử</a></li>
                    <li class="hidden"><a rel="nofollow" href="/tos">Quy chế hoạt động</a></li>
                    <li class="hidden"><a rel="nofollow" href="/noi-quy-cua-hang">Nội quy cửa hàng</a></li>
                    <li class="hidden"><a rel="nofollow" href="/chat-luong-phuc-vu">Chất lượng phục vụ</a></li>
                    <li class="hidden"><a rel="nofollow" href="/tin-tuc/can-trong-voi-nhung-sieu-thi-thegioididong-khong-chinh-chu--683321">Cảnh báo giả mạo</a></li>
                    <li class="hidden"><a rel="nofollow" href="/chinh-sach-khui-hop-apple">Chính sách khui hộp sản phẩm Apple</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <ul class="f-listmenu">
                    <li><a rel="nofollow" href="">Giới thiệu công ty (MWG.vn)</a></li>
                    <li><a rel="nofollow" href="">Tuyển dụng</a></li>
                    <li><a rel="nofollow" href="">Gửi góp ý, khiếu nại</a></li>
                    <li><a rel="nofollow" href="">Tìm siêu thị (2.949 shop)</a></li>
                    <li><a rel="nofollow" class="linkversion" href="">Xem bản mobile</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <div class="f-listtel">
                    <p class="f-listtel__title">
                        <strong>Tổng đài hỗ trợ</strong> (Miễn phí gọi)
                    </p>
                    <p class="f-listtel__content"><span>Gọi mua:</span> <a href="tel:18001060">1800.1060</a> (7:30 - 22:00)</p>
                    <p class="f-listtel__content"><span>Kỹ thuật:</span> <a href="tel:18001763">1800.1763</a> (7:30 - 22:00)</p>
                    <p class="f-listtel__content"><span>Khiếu nại:</span> <a href="tel:18001062">1800.1062</a> (8:00 - 21:30)</p>
                    <p class="f-listtel__content"><span>Bảo hành:</span> <a href="tel:18001064">1800.1064</a> (8:00 - 21:00)</p>
                </div>
            </div>
            <div class="footer__col">
                <div class="f-social">
                    <a href="" class="link-fb">
                        <i class="icon-facebook"></i> 3721.4k Fan
                    </a>
                    <a href="" class="link-ytb">
                        <i class="icon-youtube"></i> 829k Đăng ký
                    </a>
                </div>
                <div class="f-certify">
                    <a rel="nofollow" href="" target="_blank">
                        <i class="icon-congthuong"></i>
                    </a>
                    <a rel="nofollow" href="/tos#giai-quyet-khieu-nai" target="_blank">
                        <i class="icon-khieunai"></i>
                    </a>
                    <a rel="nofollow" class="dmca-badge" href="" target="_blank">
                        <i class="icon-protected"></i>
                    </a>
                    <a rel="nofollow" class="" href="" target="_blank">
                        <i class="icon-ncsc"></i>
                    </a>
                </div>
                <div class="f-website">
                    <p class="f-website-title">Website cùng tập đoàn</p>
                    <a rel="nofollow" href="">
                        <i class="icon-dmx"></i>
                    </a>
                    <a rel="nofollow" href="">
                        <i class="icon-bhx"></i>
                    </a>
                    <a rel="nofollow" href="">
                        <i class="icon-maiam"></i>
                    </a>
                </div>
            </div>
        </section>

    </footer>
    <div class="copyright">
        <section>
            <p>
                © 2018. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH &amp; ĐT TP.HCM cấp ngày 02/01/2007. GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp ngày 04/06/2020.<br> Địa chỉ: 128 Trần Quang Khải, P. Tân Định, Q.1, TP.Hồ
                Chí Minh. Điện thoại: 028 38125960. Email: cskh@thegioididong.com. Chịu trách nhiệm nội dung: Huỳnh Văn Tốt. <a rel="nofollow" href="/thoa-thuan-su-dung-trang-mxh">Xem chính sách sử dụng</a>
            </p>
        </section>
    </div>
    <script src="./scrip.js"></script>
</body>
</html>