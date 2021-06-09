<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên mật khẩu?</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/assignment2/public/styles/reset.css">
</head>
<body>
    <img src="/assignment2/public/img/circles-menu-1.gif" alt="" id="loading-image">
    <div id="layer"></div>
    <div class="content">
        <img class="logo" src="/assignment2/public/img/logo-dark-01.png" alt="logo">
        <h3 class="text-center" style="font-weight: lighter;">Tạo lại mật khẩu</h3>
        <div class="form-reset">
            <form class="mx-auto">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <?php if (isset($_SESSION["login"])) { $row = mysqli_fetch_assoc($data);?>
                        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" value="<?php echo $row["email"]; ?>">
                    <?php } else {?> <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Nhập email"><?php }?>
                    <small id="emailHelp" class="form-text text-muted">Nhập email đã được xác minh của bạn và chúng tôi sẽ gửi cho bạn một mã xác nhận</small>
                </div>
                <button type="button" id="btnSendCode" class="btn btn-primary btn-block">Gửi mã</button>
            </form>
            <form class="mx-auto mt-5">
                <div class="form-group">
                    <label for="exampleInputPassword1">Mã xác nhận</label>
                    <input type="number" class="form-control" id="InputCode" placeholder="Nhập mã xác nhận">
                </div>
                <button type="button" id="btnSubmitCode" class="btn btn-primary btn-block">Xác nhận</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/assignment2/public/scripts/reset.js"></script>
</body>
</html>