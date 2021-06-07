<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="/assignment2/public/styles/register.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php require_once "./src/views/layouts/header.php"?>
    <div class="content">
        <img src="/assignment2/public/img/circles-menu-1.gif" alt="" id="loading-image">
        <div id="layer"></div>
        <?php require_once "./src/views/layouts/login.php"?>
        <h4 style="font-weight:normal; margin: 20px auto; width: 240px">Đăng ký tài khoản mới</h4>
        <form id="userRegister">
            <div class="form-group">
                <label for="email">Địa chỉ Email</label>
                <input type="text" name="email" class="form-control" id="inputEmail" data-container="body" data-toggle="popover" data-placement="right" title="Email" data-content="Phải có định dạng xxx@xx.xxx">
                <small id="invalidEmailRegister" class="form-text" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" name="password" class="form-control" id="inputPassword" data-container="body" data-toggle="popover" data-placement="right" title="Mật khẩu" data-content="Ít nhất 6 ký tự, ít nhất một ký tự in hoa, ít nhất một số và một ký tự đặc biệt">
                <small id="invalidPassword" class="form-text" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Xác nhận mật khẩu</label>
                <input type="password" name="confirmPassword" class="form-control" id="inputConfirmPassword">
                <small id="invalidConfirmPassword" class="form-text" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label for="firstName">Họ</label>
                <input type="text" name="fname" class="form-control" id="inputFirstName" data-container="body" data-toggle="popover" data-placement="right" title="Họ" data-content="Không chưa ký tự đặc biệt">
                <small id="invalidFname" class="form-text" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label for="lastName">Tên</label>
                <input type="text" name="lname" class="form-control" id="inputLastName" data-container="body" data-toggle="popover" data-placement="right" title="Tên" data-content="Không chứ ký tự đặc biệt">
                <small id="invalidLname" class="form-text" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="number" name="phone" class="form-control" id="inputPhone" data-container="body" data-toggle="popover" data-placement="right" title="Email" data-content="Số điện thoại có 10 chữ số">
                <small id="invalidPhone" class="form-text" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label for="address">Tỉnh/Thành phố</label>
                <select name="address" id="city" class="form-control">
                    <option value="" seleted>Chọn tỉnh/thành phố</option>
                </select>
                <small id="invalidAddress" class="form-text" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label for="address">Quận/Huyện</label>
                <select name="address" id="district" class="form-control">
                    <option value="" seleted>Chọn quận/huyện</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Xã/Phường</label>
                <select name="address" id="ward" class="form-control">
                    <option value="" seleted>Chọn xã/phường</option>
                </select>
            </div>
            <button type="button" name="btnRegister" id="butnRegister" class="btn btn-primary" style="display:block; width: 25%; margin: 0 auto;">Đăng ký</button>
        </form>
    </div>
    <?php require_once "./src/views/layouts/footer.php"?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/assignment2/public/scripts/script.js"></script>
    <script src="/assignment2/public/scripts/register.js"></script>
</body>
</html>