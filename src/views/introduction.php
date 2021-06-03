<!-- Nguyễn Phạm Thành Tài - 1813891 -->

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu</title>
    <link rel="stylesheet" href="../public/styles/introduction.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <?php require_once "./src/views/layouts/header.php"?>
    
    <div class="content">
    <?php echo $_SERVER["REQUEST_URI"] ?>
        <?php require_once "./src/views/layouts/login.php"?>
        <div class="container-fluid d-flex justify-content-center align-items-center" id="page-header">
            <h1>Giới thiệu</h1>
            <p>Trang chủ / <b>Giới thiệu</b></p>
        </div>
        <div class="gap30"></div>
        <div class="container content-intro">
            <div class="row align-equal">
                <div class="col-12 col-sm-6 col-md-5 col-lg-6" id="gallery">
                    <div class="col-lg-12 col-md-12 grid-col-1 pd0">
                        <a href="#"><img src="../public/image/h1.jpg" alt="h1" id="heg100"></a>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-12 grid-col-1-3 pd10">
                            <a href="#"><img src="../public/image/h2sm.jpg " alt="h2" class="heg95"></a>
                        </div>
                        <div class="col-lg-4 col-md-12 grid-col-1-3 pd10">
                            <a href="#"><img src="../public/image/h3sm.jpg" alt="h3" class="heg95"></a>
                        </div>
                        <div class="col-lg-4 col-md-12 grid-col-1-3 pd10">
                            <a href="#"><img src="../public/image/h4sm.jpg" alt="h4" class="heg95"></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-7 col-lg-6">
                    <div class="intro">
                        <h2>Giới thiệu</h2>
                        <p>Lorem Ipsum chỉ đơn giản là một đoạn văn bản giảLorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn.</p>
                        <h6>khi một họa sĩ vô danh ghép nhiều đoạn văn bản với nhau để tạo thành một bản mẫu văn bản. Đoạn văn bản này không những đã tồn tại năm thế kỉ, mà khi được áp dụng vào tin học văn phòng, nội dung của nó vẫn không hề bị thay đổi. Nó đã được phổ biến trong những năm 1960 nhờ việc bán những bản giấy Letraset in những đoạn Lorem Ipsum, và gần đây hơn</h6>
                    </div>
                    <div class="sm">
                        <h5>Sứ mệnh của chúng tôi</h5>
                        <ul id="cli">
                            <li>Cung cấp một loại dịch vụ khác nhau cho gia đình và các chuyên gia</li>
                            <li>Cung cấp chất lượng cao và dịch vụ phù hợp</li>
                            <li>Sử dụng các sản phẩm làm sạch thân thiện với môi trường</li>
                            <li>Cung cấp công việc ổn định với mức lương cộng hưởng</li>
                            <li>Tập trung nguồn lực của chúng tôi vào việc duy trì các tiêu chuẩn</li>
                            <li>Làm cho bạn một khách hàng cực kỳ hài lòng</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="pdtop">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 pdxq">
                        <div class="p24">
                            <img src="../public/image/icon1.png" alt="icon1" class="pdxq1">
                            <h5 class="pdxq1h">Thanh toán dễ dàng</h5>
                            <p class="pdxq1p">Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 pdxq">
                        <div class="p24">
                            <img src="../public/image/icon2.png" alt="icon2" class="pdxq1">
                            <h5 class="pdxq1h">Thanh toán dễ dàng</h5>
                            <p class="pdxq1p">Lorem chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 pdxq">
                        <div class="p24">
                            <img src="../public/image/icon3.png" alt="icon3" class="pdxq1">
                            <h5 class="pdxq1h">Thanh toán dễ dàng</h5>
                            <p class="pdxq1p">Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sp50"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 k1">
                    <div class="row k12">
                        <h4>Chúng tôi quan tâm đến ngôi nhà của bạn</h4>
                        <p>Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn. Lorem Ipsum đã được sử dụng như một văn bản chuẩn cho ngành công nghiệp in ấn từ những năm 1500</p>
                    </div>
                    <div class="row k11">
                        <div class="col-sm-6 col-12 k111">
                            <img src="../public/image/icon4.png" alt="icon4">
                            <h5>CÔNG NGHỆ LÀM SẠCH</h5>
                            <p>Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn.</p>
                        </div>
                        <div class="col-sm-6 col-12 k111">
                            <img src="../public/image/icon5.png" alt="icon5">
                            <h5>CÔNG NGHỆ LÀM SẠCH</h5>
                            <p>Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn.</p>
                        </div>
                    </div>
                    <div class="row k11">
                        <div class="col-sm-6 col-12 k111">
                            <img src="../public/image/icon6.png" alt="icon6">
                            <h5>CÔNG NGHỆ LÀM SẠCH</h5>
                            <p>Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn.</p>
                        </div>
                        <div class="col-sm-6 col-12 k111">
                            <img src="../public/image/icon7.png" alt="icon7">
                            <h5>CÔNG NGHỆ LÀM SẠCH</h5>
                            <p>Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn.</p>
                        </div>
                    </div>
                    <div class="row k11">
                        <div class="col-sm-6 col-12 k111">
                            <img src="../public/image/icon8.png" alt="icon8">
                            <h5>CÔNG NGHỆ LÀM SẠCH</h5>
                            <p>Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn.</p>
                        </div>
                        <div class="col-sm-6 col-12 k111">
                            <img src="../public/image/icon9.png" alt="icon9">
                            <h5>CÔNG NGHỆ LÀM SẠCH</h5>
                            <p>Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 k2">
                    <div class="row">
                        <div class="col-12 padcho" id="img4">
                            <div class="sp40"></div>
                            <h5>Thanh toán chi phí</h5>
                            <p>Ước tính chi phí của bạn</p>
                            <a class="btn btn-primary btn-more" href="#" role="button">Xem thêm</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 padcho" id="img5">
                            <div class="sp40"></div>
                            <h5>Thanh toán chi phí</h5>
                            <p>Ước tính chi phí của bạn</p>
                            <a class="btn btn-primary btn-more" href="#" role="button">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="bgcolor1">
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-12 pd302">
                                <h3>Các thương hiệu liên kết</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 cao" id="logo1">
                                <img src="../public/image/logo_01-1.png" alt="logo1" class="lg1">
                            </div>
                            <div class="col-6 cao" id="logo2">
                                <img src="../public/image/logo_02-1.png" alt="logo1" class="lg1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 cao" id="logo3">
                                <img src="../public/image/logo_03-1.png" alt="logo1" class="lg1">
                            </div>
                            <div class="col-6 cao" id="logo4">
                                <img src="../public/image/logo_04-1.png" alt="logo1" class="lg1">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="col-12 pd302">
                            <h3>Các thương hiệu liênkết</h3>
                        </div>
                        <div class="col-12" id="quite">
                            <p>Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn. Lorem Ipsum đã được sử dụng như một văn bản chuẩn cho ngành công nghiệp in ấn từ những năm 1500, khi một họa sĩ vô danh ghép nhiều đoạn văn bản với nhau để tạo thành một bản mẫu văn bản. Đoạn văn bản này không những đã tồn tại năm thế kỉ, mà khi được áp dụng vào tin học văn phòng, nội dung của nó vẫn không hề bị thay đổi.</p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid sp30"></div>
            </div>
        </div>
    </div> 
    <?php require_once "./src/views/layouts/footer.php"?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../public/scripts/script.js"></script>
</body>
</html>