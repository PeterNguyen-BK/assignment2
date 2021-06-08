<?php
class ResetPassword extends Controller {

    private $code;
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
        $this->code = rand(100001, 999999);
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
    }

    function confirmCode() {
        $codeSent = $_POST["code"];
        if ($codeSent == $this->code) {
            echo "<form class=\"w-75 ml-3 mt-3\" id=\"formChangePwd\">
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Mật khẩu cũ</label>
                    <input type=\"password\" class=\"form-control\" id=\"oldPassword\">
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Mật khẩu mới</label>
                    <input type=\"password\" class=\"form-control\" id=\"newPassword\">
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Xác nhận mật khẩu</label>
                    <input type=\"password\" class=\"form-control\" id=\"confirmPassword\">
                </div>
                <button type=\"submit\" id=\"btnChangePwd\" class=\"btn btn-primary\">Cập nhật mật khẩu</button>
            </form>";
        }
    }
}
?>