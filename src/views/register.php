<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="/assignment2/public/styles/introduction.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!-- <img class="logo" style="display: block; margin: 0 auto;" src="/assignment2/public/img/logo-dark-01.png" alt=""> -->
    <?php require_once "./src/views/layouts/header.php"?>
    <div class="content">
        <?php require_once "./src/views/layouts/login.php"?>
        <h4 style="font-weight:normal; margin: 20px auto; width: 240px">Đăng ký tài khoản mới</h4>
        <form action="/assignment2/User/register" method="post" id="userRegister">
            <div class="form-group">
                <label for="email">Địa chỉ Email</label>
                <input type="text" name="email" class="form-control" id="inputEmail">
                <small id="invalidEmailRegister" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" name="password" class="form-control" id="password">
                <small id="invalidPassword" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Xác nhận mật khẩu</label>
                <input type="password" name="confirmPassword" class="form-control" id="confirmPassword">
                <small id="invalidConfirmPassword" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="firstName">Họ</label>
                <input type="text" name="fname" class="form-control" id="firstName">
                <small id="invalidFname" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="lastName">Tên</label>
                <input type="text" name="lname" class="form-control" id="lastName">
                <small id="invalidLname" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="number" name="phone" class="form-control" id="phone">
                <small id="invalidPhone" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ</label>
                <input type="text" name="address" class="form-control" id="address">
            </div>
            <button type="submit" name="btnRegister" class="btn btn-primary" style="display:block; width: 25%; margin: 0 auto;">Đăng ký</button>
        </form>
    </div>
    <?php require_once "./src/views/layouts/footer.php"?>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/assignment2/public/scripts/script.js"></script>
    <script src="/assignment2/public/scripts/register.js"></script>
</body>
</html>