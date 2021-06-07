<?php
class User extends Controller {

    public $UserModel, $ServiceModel;

    public function __construct() {
        $this->UserModel = $this->Model("UserModel");
        $this->ServiceModel = $this->Model("ServiceModel");
    }

    function show() {
        if (isset($_SESSION["login"])){
            $user = $this->UserModel->getDetailUser($_SESSION["user"]);
            $comment = $this->ServiceModel->getComment($_SESSION["user"]);
            $this->View("userInfo", [$user, $comment]);
            if (isset($_POST["btnUpdateInfo"])) {
                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                $phone = $_POST["phone"];
                $addr = $_POST["address"];
                $result = $this->UserModel->updateUser($fname, $lname, $addr, $phone, $_SESSION["user"]);
                $_SESSION["login"] = $fname." ".$lname;
            }
        } else {
            header("Location: /assignment2/Home/");
        }
    }

    function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $check = false;
            $email = $_POST["email"];
            if (strlen($email) == 0) {
                $check = true;
            } else if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) {
                $check = true;
            } else {
                $result = $this->UserModel->getUser();
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($email == $row["email"]) {
                        $check = true;
                        break;
                    }
                }
            }

            $pwd = $_POST["password"];
            if (strlen($pwd) == 0) {
                $check = true;
            } else if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $pwd)) {
                $check = true;
            }

            $confirmPwd = $_POST["confirmPassword"];
            if (strlen($confirmPwd) == 0) {
                $check = true;
            } else if ($confirmPwd != $pwd) {
                $check = true;
            }

            $pwd = password_hash($pwd, PASSWORD_DEFAULT);

            $fname = $_POST["fname"]; 
            if (strlen($fname) == 0) {
                $check = true;
            } else if (preg_match("/[\'^£$%&*()}{@#~?><>,|=_+¬-]|\d/", $fname)) {
                $check = true;
            }

            $lname = $_POST["lname"]; 
            if (strlen($lname) == 0) {
                $check = true;
            } else if (preg_match("/[\'^£$%&*()}{@#~?><>,|=_+¬-]|\d/", $lname)) {
                $check = true;
            }

            $phone = $_POST["phone"];
            if (strlen($phone) == 0) {
                $check = true;
            } else if (!preg_match("/^[0-9]{10}$/", $phone)) {
                $check = true;
            }

            $addr = $_POST["address"];
            if (strlen($addr) == 0) {
                $check = true;
            }
            // $result = $this->UserModel->insertUser($fname, $lname, $addr, $phone, $email, $pwd);
            if (!$check) {
                $to      = $email; 
                $subject = 'Signup | Verification'; 
                $message = '
                
                Thanks for your registration!
                Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
                
                ------------------------
                Username: '.$fname.$lname.'
                Password: '.$pwd.'
                ------------------------
                
                Please click this link to activate your account:
                http://localhost/assignment2/User/verifyEmail/'.$email.''; // Our message above including the link
                                    
                $headers = 'From:BKCleanly@gmail.com'; // Set from headers
                if (mail($to, $subject, $message, $headers)) {
                    $result = $this->UserModel->insertUser($fname, $lname, $addr, $phone, $email, $pwd);
                }
            } else echo "Fail";
        } else $this->View("register", []);
    }

    function verifyEmail($email) {
        if (isset($email)) {
            $user = $this->UserModel->checkUser($email);
            if ($user->{"num_rows"} > 0) {
                $result = $this->UserModel->activeUser($email);
                echo '<div>Your account has been activated, you can now login</div>';
            } else echo '<div>The url is either invalid or you already have activated your account.</div>';
        } else {
            echo '<div>Invalid approach, please use the link that has been send to your email.</div>';
        }
    
    }

    function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            header("Location: /assignment2/Home/");
        } else {
            $check = true;
            if (isset($_POST["email"])) {
                $email = $_POST["email"];
                $pwd = $_POST["password"];
                $user = $this->Model("UserModel");
                $rlt = $user->getUser();
                while ($row = mysqli_fetch_array($rlt)) {
                    if (array_search($email, $row)) {
                        $check = true;
                        if (password_verify($pwd, $row["password"])) {
                            $_SESSION["login"] = $row["first_name"]." ".$row["last_name"];
                            $_SESSION["user"] = $row["UID"];
                            break;
                        } else {
                            $check = false;
                            break;
                        }
                    } else $check = false;
                }
                if (!$check) echo "No";
            }
        }
    }

    function updateInfo() {
        $check = false;
        $fname = $_POST["fname"]; 
        if (strlen($fname) == 0) {
            $check = true;
        } else if (preg_match("/[\'^£$%&*()}{@#~?><>,|=_+¬-]|\d/", $fname)) {
            $check = true;
        }

        $lname = $_POST["lname"]; 
        if (strlen($lname) == 0) {
            $check = true;
        } else if (preg_match("/[\'^£$%&*()}{@#~?><>,|=_+¬-]|\d/", $lname)) {
            $check = true;
        }

        $phone = $_POST["phone"];
        if (strlen($phone) == 0) {
            $check = true;
        } else if (!preg_match("/^[0-9]{10}$/", $phone)) {
            $check = true;
        }

        $addr = $_POST["address"];
        if (strlen($addr) == 0) {
            $check = true;
        }

        if (!$check) {
            $result = $this->UserModel->updateUser($fname, $lname, $addr, $phone, $_SESSION["user"]);
            $_SESSION["login"] = $fname." ".$lname;
        } else echo "Fail";
    }

    // function changePassword() {

    // }

    function logout() {
        // unset($_SESSION["login"]);
        // unset($_SESSION["user"]);
        session_destroy();
        // header("Location: /assignment2/Home/");
    }
}

?>