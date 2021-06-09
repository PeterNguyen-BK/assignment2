<?php
class ResetPassword extends Controller {

    protected $code;
    public $UserModel;

    public function __construct() {
        $this->UserModel = $this->Model("UserModel");
    }

    function show() {
        if (isset($_SESSION["login"])) {
            $data = $this->UserModel->getDetailUser($_SESSION["user"]);
        } else $data = [];
        $this->View("reset", $data);
    }

    function sendCode() {
        if (isset($_POST["email"])) {
            $email = $_POST["email"];
            $check = false;
            $data = $this->UserModel->getUser();
            while ($row = mysqli_fetch_assoc($data)) {
                if ($email == $row["email"]) {
                    $check = true;
                    $this->code = rand(100001, 999999);
                    $_SESSION["code"] = $this->code;
                    $_SESSION["idChange"] = $row["UID"];
                    $email = $_POST["email"];
                    $to = $email; 
                    $subject = 'Reset Password | Verification'; 
                    $message = '
                    DỊCH VỤ VỆ SINH BK-CLEANLY
                    ------------------------
                    Đây là mã xác nhận để reset mật khẩu: '.$this->code.''; // Our message above including the link
                                        
                    $headers = 'From:BKCleanly@gmail.com'; // Set from headers
                    if (!mail($to, $subject, $message, $headers)) {
                        echo "Fail";
                    }
                    break;
                }
            }
            if (!$check) echo "Fail";
            
        } else header("Location: /assignment2/ResetPassword/");
    }

    function confirmCode() {
        $codeSent = $_POST["code"];
        if (isset($_SESSION["code"]) && $codeSent == $_SESSION["code"]) {
            echo "<form class=\"mx-auto\" id=\"formChangePwd\">
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Mật khẩu mới</label>
                    <input type=\"password\" class=\"form-control\" id=\"newPassword\">
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Xác nhận mật khẩu</label>
                    <input type=\"password\" class=\"form-control\" id=\"confirmPassword\">
                </div>
                <button type=\"button\" id=\"btnChangePwd\" class=\"btn btn-primary\">Cập nhật mật khẩu</button>
            </form>";
        } else echo "Fail";
    }

    function changePassword() {
        if (isset($_POST["confirm_pwd"])) {
            $check = false;
            $new_pwd = $_POST["new_pwd"];
            if (strlen($new_pwd) == 0) {
                $check = true;
            } else if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $new_pwd)) {
                $check = true;
            }

            $confirm_pwd = $_POST["confirm_pwd"];
            if (strlen($confirm_pwd) == 0) {
                $check = true;
            } else if ($confirm_pwd != $new_pwd) {
                $check = true;
            }
            
            if (!$check) {
                $new_pwd = password_hash($new_pwd, PASSWORD_DEFAULT);
                $result = $this->UserModel->updatePassword($new_pwd, $_SESSION["idChange"]);
                if (!$result) echo "Fail1";
                else session_destroy();
            } else echo "Fail";
        }
    }
}
?>