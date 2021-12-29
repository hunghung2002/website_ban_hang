<?php
    session_start();

    include "thuvien.php";
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
    //làm rỗng giỏ hàng
    if(isset($_GET['delcart'])&&($_GET['delcart']==1)) unset($_SESSION['giohang']);
    //xóa sp trong giỏ hàng
    if(isset($_GET['delid'])&&($_GET['delid']>=0)){
       array_splice($_SESSION['giohang'],$_GET['delid'],1);
    }
    //lấy dữ liệu từ form
    if(isset($_POST['addcart'])&&($_POST['addcart'])){
        $hinh=$_POST['hinh'];
        $tensp=$_POST['tensp'];
        $gia=$_POST['gia'];
        $soluong=$_POST['soluong'];

        //kiem tra sp co trong gio hang hay khong?

        $fl=0; //kiem tra sp co trung trong gio hang khong?

        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
            
            if($_SESSION['giohang'][$i][1]==$tensp){
                $fl=1;
                $soluongnew=$soluong+$_SESSION['giohang'][$i][3];
                $_SESSION['giohang'][$i][3]=$soluongnew;
                break;

            }
            
        }
        //neu khong trung sp trong gio hang thi them moi
        if($fl==0){
            //them moi sp vao gio hang
            $sp=[$hinh,$tensp,$gia,$soluong];
            $_SESSION['giohang'][]=$sp;
        }

       // var_dump($_SESSION['giohang']);
    }

    // function showgiohang(){
    //     if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
    //         if(sizeof($_SESSION['giohang'])>0){
    //             $tong=0;
    //             for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
    //                 $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
    //                 $tong+=$tt;
    //                 echo '<tr>
    //                         <td>'.($i+1).'</td>
    //                         <td><img src="images/'.$_SESSION['giohang'][$i][0].'" alt=""></td>
    //                         <td>'.$_SESSION['giohang'][$i][1].'</td>
    //                         <td>'.$_SESSION['giohang'][$i][2].'</td>
    //                         <td>'.$_SESSION['giohang'][$i][3].'</td>
    //                         <td>
    //                             <div>'.$tt.'</div>
    //                         </td>
    //                         <td>
    //                             <a href="cart.php?delid='.$i.'">Xóa</a>
    //                         </td>
    //                     </tr>';
    //             }
    //             echo '<tr>
    //                     <th colspan="5">Tổng đơn hàng</th>
    //                     <th>
    //                         <div>'.$tong.'</div>
    //                     </th>
    
    //                 </tr>';
    //         }else{
    //             echo "Giỏ hàng rỗng!";
    //         }    
    //     }
    // }
    


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
                <li><a href="cart.php">Đăng Ký</a></li>
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
    <section class="menu-bar"  style="margin-top: -16px;">
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
        <div class="row mb ">
            <div class="boxtrai mr" id="bill">
            <form action="bill.php" method="POST" >
            <div class="row" style="padding: 30px 15px;border: 1px solid #d7d5d5;background-color: #fed100;margin: 20px 0;">
                    <h1 style="font-size: 20px; padding-bottom: 10px">THÔNG TIN NHẬN HÀNG</h1>
                    <table class="thongtinnhanhang">
                        <tbody><tr>
                            <td width="20%">Họ tên</td>
                            <td><input type="text" name="hoten" required=""></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="diachi" required=""></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="dienthoai" required=""></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" required=""></td>
                        </tr>
                    </tbody></table>
                </div>
                <div class="row mb ">
                <h1 style="font-size: 20px;padding: 10px;color: #e57627; font-size: 20px">GIỎ HÀNG</h1>
                    <table style="border:1px solid #ddd;">
                        <tr style="border: 1px solid;">
                            <th>STT</th>
                            <th>Hình</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền ($)</th>
                            <th>Xóa</th>
                        </tr>
                        <p style="border:1px solid #ddd; text-align:center;">
                            <?php echo showgiohang(); ?>

                        </p>
                        <!-- <tr>
                            <td>1</td>
                            <td><img src="images/1.jpg" alt=""></td>
                            <td>Đồng hồ</td>
                            <td>10</td>
                            <td>1</td>
                            <td>
                                <div>10</div>
                            </td>
                        </tr> -->
                        <!-- <tr>
                            <th colspan="5">Tổng đơn hàng</th>
                            <th>
                                <div>10</div>
                            </th>

                        </tr> -->
                    </table>
                </div>
                <div class="row mb" style=" display:flex ;padding: 10px 0">
                    <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang" style=" width: 27%; background: #ffa02a;color: white;border: 1px solid #ddd;border-radius: 4px;height: 45px;">
                    <a style="width: 20%" href="cart.php?delcart=1"><input style="background: #ffa02a;color: white;border: 1px solid #ddd;border-radius: 4px;height: 45px;padding: 0 19px;font-size: 16px;" type="button" value="XÓA GIỎ HÀNG"></a>
                    <a style="width: 25%" href="index.php"><input style="background: #ffa02a;color: white;border: 1px solid #ddd;border-radius: 4px;height: 45px;padding: 0 19px;font-size: 16px;" type="button" value="TIẾP TỤC ĐẶT HÀNG"></a>
                </div>
                    
            </form>
            </div>
            <div class="boxphai">
                <!-- <div class="row mb ">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <form action="#" method="post">
                            <div class="row mb10">
                                Tên đăng nhập<br>
                                <input type="text" name="user">
                            </div>
                            <div class="row mb10">
                                Mật khẩu<br>

                                <input type="password" name="pass">
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name=""> Ghi nhớ tài khoản?</div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập">
                            </div>
                        </form>
                        <li>
                            <a href="#">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="#">Đăng ký thành viên</a>
                        </li>
                    </div>
                </div> -->
                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <li>
                                <a style="color: #333;font-size:14px;" href="#">Đồng hồ</a>
                            </li>
                            <li>
                                <a style="color: #333;font-size:14px;" href="#">Laptop</a>
                            </li>
                            <li>
                                <a style="color: #333;font-size:14px;" href="#">Điện thoại</a>
                            </li>
                            <li>
                                <a style="color: #333;font-size:14px;" href="#">Ba lô</a>
                            </li>
                            <li>
                                <a style="color: #333;font-size:14px;" href="#">Đồng hồ</a>
                            </li>
                            <li>
                                <a style="color: #333;font-size:14px;" href="#">Laptop</a>
                            </li>
                            <li>
                                <a style="color: #333;font-size:14px;" href="#">Điện thoại</a>
                            </li>
                            <li>
                                <a style="color: #333;font-size:14px;" href="#">Ba lô</a>
                            </li>
                        </ul>
                    </div>
                    <div class="boxfooter searbox">
                        <!-- <form action="#" method="post">
                            <input type="text" name="" id="">
                        </form> -->
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitle" style="font-size: 20px;">TOP 10 YÊU THÍCH</div>
                    <div class="row boxcontent">
                        <div class="row mb10 top10" style="display:flex; padding:10px" >
                            <img style="width:30%; height: auto;" src="./img/iphone-13-pro-max.jpg" alt="">
                            <a style=" font-size:17px; color:black;" href="#">iphone-13-pro-max</a>
                        </div>
                        <div class="row mb10 top10" style="display:flex; padding:10px" >
                            <img style="width:30%; height: auto;" src="./img/xiaomi-11t-grey.jpg" alt="">
                            <a style=" font-size:17px; color:black;" href="#">xiaomi-11t-grey</a>
                        </div>
                        <div class="row mb10 top10" style="display:flex; padding:10px" >
                            <img style="width:30%; height: auto;" src="./img/samsung-galaxy-s20.jpg" alt="">
                            <a style=" font-size:17px; color:black;" href="#">samsung-galaxy-s20</a>
                        </div>
                        <div class="row mb10 top10" style="display:flex; padding:10px" >
                            <img style="width:30%; height: auto;" src="./img/samsung-galaxy-s21.jpg" alt="">
                            <a style=" font-size:17px; color:black;" href="#">samsung-galaxy-s21</a>
                        </div>
                        <div class="row mb10 top10" style="display:flex; padding:10px" >
                            <img style="width:30%; height: auto;" src="./img/xiaomi-11t-grey.jpg" alt="">
                            <a style=" font-size:17px; color:black;" href="#">xiaomi-11t-grey</a>
                        </div>
                        <div class="row mb10 top10" style="display:flex; padding:10px" >
                            <img style="width:30%; height: auto;" src="./img/iphone-13-pro-max.jpg" alt="">
                            <a style=" font-size:17px; color:black;" href="#">iphone-13-pro-max</a>
                        </div>
                        <div class="row mb10 top10" style="display:flex; padding:10px" >
                            <img style="width:30%; height: auto;" src="./img/xiaomi-11t-grey.jpg" alt="">
                            <a style=" font-size:17px; color:black;" href="#">xiaomi-11t-grey</a>
                        </div>
                        <div class="row mb10 top10" style="display:flex; padding:10px" >
                            <img style="width:30%; height: auto;" src="./img/samsung-galaxy-s20.jpg" alt="">
                            <a style=" font-size:17px; color:black;" href="#">samsung-galaxy-s20</a>
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
    </div>

</body>

</html>