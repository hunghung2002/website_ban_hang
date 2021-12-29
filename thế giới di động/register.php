<script>alert('Bạn phải đăng ký')</script>
<?php
    session_start();
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
    <title>Đăng ký</title>
</head>
<body>
    <header>
        <img src="./img/bgr1.png" alt="">
    </header>
    <nav>
        <div class="container">
            <ul>
                <li>
                    <a href="index.html"><img style="width: 150px" src="./img/logo-the-gioi-di-dong-2.jpg" alt=""></a>
                </li>
                <li id="adress-form">
                    <a href="#">Hà Nội<i class="fas fa-sort-down"></i></a>
                </li>
                <li><input type="text" placeholder="Bạn tìm gì......."><i class="fas fa-search"></i></li>
                <li>
                    <a href=""></a><button><i class="fas fa-shopping-cart"></i>Giỏ hàng</button></li>
                <li><a href="">Lịch sử <br> đơn hàng</a></li>
                <li><a href=""><span class="btn-content"><span class="btn-top"></span></span> Mua thẻ nạp ngay</a></li>
                <li><a href="">24h công nghệ</a></li>
                <li><a href="">Hỏi đáp</a></li>
                <li><a href="">Game app</a></li>
                <li><a href="register.php">Đăng Ký</a></li>
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
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="register_submit.php" method="POST" >
                    <legend>Đăng ký tài khoản</legend>
                    <p>
                        <?php
                            if(isset($_SESSION["thongbao"])) {
                                echo $_SESSION["thongbao"];
                                unset($_SESSION["thongbao"]);
                            }
                        ?>
                    </p>     
                    <div class="form-group">
                        <label for="">Tên người dùng</label>
                        <input type="text" class="form-control" name="username" id="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" id="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu</label>
                        <input type="text" class="form-control" name="password" id="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Nhập lại mật khẩu</label>
                        <input type="text" class="form-control" name="rPassword" id="" placeholder="">
                    </div>
                    <div style="margin-top: 30px;">
                        <button type="submit" name="submit" class="btn btn-primary">Đăng ký</button>
                        <button type="reset" class="btn btn-primary">Làm mới</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>