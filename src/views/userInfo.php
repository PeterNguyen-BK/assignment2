<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION["login"] ?></title>
    <link rel="stylesheet" href="/assignment2/public/styles/userInfo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php require_once "./src/views/layouts/header.php"?>
    <div class="content">
        <img src="/assignment2/public/img/circles-menu-1.gif" alt="" id="loading-image">
        <div id="layer"></div>
        <div class="avatar">
            <img width="260" height="260" src="/assignment2/public/img/avt.png" alt="">
            <?php while($row = mysqli_fetch_assoc($data[0])) { $address = explode(", ", $row["address"]);?>
            <h3><?php echo $row["first_name"]." ".$row["last_name"] ?></h3>
            <h5 style="font-weight: lighter;"><?php echo $row["email"] ?></h5>
            <?php if (intval($row["active"]) == 0) echo "<h6 style=\"color: red;\">Tài khoản chưa kích hoạt</h6>" ?>
            
            <?php if ($row["active"] == 1) {?> 
            <button class="btn btn-secondary btn-block" id="editInfo" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Cập nhật thông tin
            </button>
            <?php }else {?>
            <span class="d-inline-block w-100" data-toggle="popover" data-placement="bottom" data-content="Bạn cần kích hoạt tài khoản"> 
                <button type="button" style="pointer-events: none;" class="btn btn-secondary btn-block" disabled>Cập nhật thông tin</button>
            </span>
            <?php } ?>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <form>
                        <div class="form-group">
                            <label for="firstName">Họ</label>
                            <input type="text" name="fname" class="form-control" id="inputFirstName" value="<?php echo $row["first_name"]?>">
                            <small id="invalidFname" class="form-text" style="color: red;"></small>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Tên</label>
                            <input type="text" name="lname" class="form-control" id="inputLastName" value="<?php echo $row["last_name"]?>">
                            <small id="invalidLname" class="form-text" style="color: red;"></small>
                        </div>
                        <div class="form-group">
                            <label for="address">Tỉnh/Thành phố</label>
                            <input type="text" name="address" class="form-control" id="city" value="<?php echo $address[2]?>">
                            <small id="invalidAddress" class="form-text" style="color: red;"></small>
                        </div>
                        <div class="form-group">
                            <label for="address">Quận/Huyện</label>
                            <input type="text" name="address" class="form-control" id="district" value="<?php echo $address[1]?>">
                        </div>
                        <div class="form-group">
                            <label for="address">Phường/Xã</label>
                            <input type="text" name="address" class="form-control" id="ward" value="<?php echo $address[0]?>">
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại</label>
                            <input type="number" name="phone" class="form-control" id="inputPhone" value="<?php echo $row["phone"]?>">
                            <small id="invalidPhone" class="form-text" style="color: red;"></small>
                        </div>
                        <button type="button" name="btnUpdateInfo" id="btnUpdateInfo" class="btn btn-success btn-sm">Cập nhật</button>
                        <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="collapse" data-target="#collapseExample">Cancel</button>
                    </form>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="user-information">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dịch vụ đã đăng ký</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="comment-tab" data-toggle="tab" href="#comment" role="tab" aria-controls="comment" aria-selected="false">Bình luận của bạn</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="service d-flex justify-content-between flex-wrap">
                        <div class="card" style="margin: 10px 0; width: 49%;">
                            <div class="card-body">
                                <a href="">Dọn nhà sau sửa chữa</a>
                                <p style="font-size: 11px; font-weight: lighter; color: rgb(150, 150, 150);">Chưa thanh toán</p>
                            </div>
                        </div>
                        <div class="card" style="margin: 10px 0; width: 49%;">
                            <div class="card-body">
                                <a href="">Dọn nhà sau sửa chữa</a>
                                <p style="font-size: 11px; font-weight: lighter; color: rgb(150, 150, 150);">Chưa thanh toán</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="comment" role="tabpanel" aria-labelledby="comment-tab">
                    <ul>
                    <?php while ($row = mysqli_fetch_assoc($data[1])) {
                        echo "<li style=\"padding: 5px 0;\"><span>".$row["comment"]."</span><span style=\"font-size: 13px; color:gray; margin-left: 5px;\">(".$row["name"]." vào lúc ".$row["time"].")</span></li>";
                    } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "./src/views/layouts/footer.php"?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/assignment2/public/scripts/userInfo.js"></script>
</body>
</html>