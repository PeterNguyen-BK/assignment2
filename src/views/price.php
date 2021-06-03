<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/styles/price.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <?php require_once "./src/views/layouts/header.php"?>   
    <div class="content">
        <?php require_once "./src/views/layouts/login.php"?>
        <div class="bg1">
            <h1>Bảng giá</h1>
            <p>Trang chủ / <b>Bảng giá</b></p>
        </div>
        <div class="introduce">
            <h3 class="animate__animated animate__lightSpeedInLeft">BK-Cleanly</h3>
            <p>Hơn ai hết chúng tôi hiểu được tầm quan trọng của việc tối ưu ngân sách vận hành doanh nghiệp. Chính vì vậy, các giải pháp dưới đây của BK-Cleanly có mức chi phí cạnh tranh, giúp khách hàng tiết kiệm ngân sách, thời gian và nguồn lực quản lí nhưng vẫn được nhận giá trị dịch vụ tốt nhất từ chúng tôi.</p>
            <p>Bảng giá được cấu thành từ số lượng nhân viên, yêu cầu vệ sinh của từng dự án. Vì vậy, Quý khách hàng vui lòng liên hệ để được tư vấn và nhận báo giá chính xác nhất. Xin chân thành cảm ơn!</p>
        </div>
        <div class="bg2">
            <p>Bảng giá chi tiết các dịch vụ BK-Cleanly</p>
            <div class="dark-layer"></div>
        </div>

        <div class="introduce2">
            <p style="margin-bottom: 50px;">Chi tiết từng hàng mục vệ sinh tại nhà xin xem các mục dưới đây.</p>
            <?php while($row = mysqli_fetch_assoc($data)) {?>
            <h5 id="service<?php echo $row["SID"]?>"><?php echo $row["name"] ?></h5>
            <div class="services">
                <div class="card" style="width: 18rem;">
                    <div class="ribbon-wrapper" data-toggle="modal" data-target="#exampleModalLong">
                        <div class="ribbon">GIẢM GIÁ</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Theo giờ</h5>
                        <h2 class="text-center"><?php echo $row["package_in_time"] ?>VND/m<sup>2</sup></h2>
                        <hr>
                        <div class="card-text">
                            <ul style="list-style-type: none; padding: 0;">
                                <li><img src="public/img/check-mark.png" alt=""> Các dịch vụ đã nêu trong mô tả</li>
                                <li style="color:gray; text-decoration: line-through;"><img src="public/img/close.svg" alt=""> Dọn dẹp định kỳ</li>
                                <li style="color:gray; text-decoration: line-through;"><img src="public/img/close.svg" alt=""> Các dịch vụ ưu đãi thêm</li>
                                <li style="color:gray; text-decoration: line-through;"><img src="public/img/close.svg" alt=""> Trở thành thành viên VIP</li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-block btn-primary">Đăng ký</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Gói tháng</h5>
                        <h2 class="text-center"><?php echo $row["package_in_month"] ?>VND/m<sup>2</sup></h2>
                        <hr>
                        <div class="card-text">
                            <ul style="list-style-type: none; padding: 0;">
                                <li><img src="public/img/check-mark.png" alt=""> Các dịch vụ đã nêu trong mô tả</li>
                                <li><img src="public/img/check-mark.png" alt=""> Dọn dẹp định kỳ</li>
                                <li style="color:gray; text-decoration: line-through;"><img src="public/img/close.svg" alt=""> Các dịch vụ ưu đãi thêm</li>
                                <li style="color:gray; text-decoration: line-through;"><img src="public/img/close.svg" alt=""> Trở thành thành viên VIP</li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-block btn-primary">Đăng ký</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <div class="ribbon-wrapper" data-toggle="modal" data-target="#exampleModalLong4">
                        <div class="ribbon1">MỚI!</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Gói năm</h5>
                        <h2 class="text-center"><?php echo $row["package_in_year"] ?>VND/m<sup>2</sup></h2>
                        <hr>
                        <div class="card-text">
                            <ul style="list-style-type: none; padding: 0;">
                                <li><img src="public/img/check-mark.png" alt=""> Các dịch vụ đã nêu trong mô tả</li>
                                <li><img src="public/img/check-mark.png" alt=""> Dọn dẹp định kỳ</li>
                                <li><img src="public/img/check-mark.png" alt=""> Các dịch vụ ưu đãi thêm</li>
                                <li><img src="public/img/check-mark.png" alt=""> Trở thành thành viên VIP</li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-block btn-primary">Đăng ký</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <?php require_once "./src/views/layouts/footer.php"?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="public/scripts/script.js"></script>
</body>
</html>