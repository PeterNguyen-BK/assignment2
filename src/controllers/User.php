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
            $email = $_POST["email"];
            $pwd = $_POST["password"];
            $pwd = password_hash($pwd, PASSWORD_DEFAULT);
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $phone = $_POST["phone"];
            $addr = $_POST["address"];
            $result = $this->UserModel->insertUser($fname, $lname, $addr, $phone, $email, $pwd);
        }

        $this->View("register", []);
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

    function logout() {
        // unset($_SESSION["login"]);
        // unset($_SESSION["user"]);
        session_destroy();
        // header("Location: /assignment2/Home/");
    }
}

?>