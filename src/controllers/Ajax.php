<?php
class Ajax extends Controller {

    public $UserModel;

    public function __construct() {
        $this->UserModel = $this->Model("UserModel");
    }

    function checkEmail() {
        $email = $_POST["email"];
        $check = false;
        $error = "";
        $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/"; 
        if (strlen($email) == 0) {
            $check = true;
            $error = "Vui lòng điền vào mục này!";
        } else if (!preg_match($pattern, $email)) {
            $check = true;
            $error = "Định dạng email không chính xác!";
        } else {
            $result = $this->UserModel->getUser();
            while ($row = mysqli_fetch_assoc($result)) {
                if ($email == $row["email"]) {
                    $check = true;
                    $error = "Email này đã được sử dụng!";
                    break;
                }
            }
        }
        if ($check) echo $error;
    }

    function checkPassword() {
        $pwd = $_POST["password"];
        $check = false;
        if (strlen($pwd) == 0) {
            $check = true;
            $error = "Vui lòng điền vào mục này!";
        } else if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $pwd)) {
            $check = true;
            $error = "Định dạng mật khẩu không hợp lệ!";
        }
        if ($check) echo $error;
    }

    function checkConfirmPassword() {
        $pwd = $_POST["password"];
        $confirmPwd = $_POST["confirmPassword"];
        $check = false;
        if (strlen($confirmPwd) == 0) {
            $check = true;
            $error = "Vui lòng điền vào mục này!";
        } else if (strcmp($confirmPwd, $pwd) != 0) {
            $check = true;
            $error = "Mật khẩu xác nhận không chính xác!";
        }
        if ($check) echo $error;
    }

    function checkFname() {
        $fname = $_POST["fname"];
        $check = false;
        $error = "";
        $pattern = "/[\'^£$%&*()}{@#~?><>,|=_+¬-]|\d/"; 
        if (strlen($fname) == 0) {
            $check = true;
            $error = "Vui lòng điền vào mục này!";
        } else if (preg_match($pattern, $fname)) {
            $check = true;
            $error = "Họ tên không hợp lệ!";
        }
        if ($check) echo $error;
    }
    
    function checkLname() {
        $fname = $_POST["lname"];
        $check = false;
        $error = "";
        $pattern = "/[\'^£$%&*()}{@#~?><>,|=_+¬-]|\d/"; 
        if (strlen($fname) == 0) {
            $check = true;
            $error = "Vui lòng điền vào mục này!";
        } else if (preg_match($pattern, $fname)) {
            $check = true;
            $error = "Họ tên không hợp lệ!";
        }
        if ($check) echo $error;
    }

    function checkPhone() {
        $phone = $_POST["phone"];
        $check = false;
        if (strlen($phone) == 0) {
            $check = true;
            $error = "Vui lòng điền vào mục này";
        } else if (!preg_match("/^[0-9]{10}$/", $phone)) {
            $check = true;
            $error = "Số điện thoại không hợp lệ";
        }
        if ($check) echo $error;
    }

    function checkAddress() {
        $addr = $_POST["address"];
        $check = false;
        if (strlen($addr) == 0) {
            $check = true;
            $error = "Vui lòng chọn địa chỉ!";
        }
    }
}
?>