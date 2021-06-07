<?php
class UserModel extends Database {
    public function getUser() {
        $qr = "SELECT * FROM user";
        return mysqli_query($this->connect, $qr);
    }

    public function insertUser($fname, $lname, $address, $phone, $email, $password) {
        $qr = "INSERT INTO user VALUES(null, '$fname', '$lname', '$address', '$phone', '$email', '$password', 0)";
        $result = false;
        $temp = mysqli_query($this->connect, $qr);
        if ($temp) {
            $result = true;
        }
        return json_encode($result);
    }

    public function updateUser($fname, $lname, $address, $phone, $id) {
        $qr = "UPDATE user SET first_name='$fname', last_name='$lname', address='$address', phone='$phone' WHERE UID=$id";
        $result = false;
        $temp = mysqli_query($this->connect, $qr);
        if ($temp) {
            $result = true;
        }
        return json_encode($result);
    }

    public function getDetailUser($uid) {
        $qr = "SELECT * FROM user WHERE uid = $uid";
        return mysqli_query($this->connect, $qr);
    }

    public function checkUser($email) {
        $qr = "SELECT * FROM user WHERE email = '$email'";
        return mysqli_query($this->connect, $qr);
    }

    public function activeUser($email) {
        $qr = "UPDATE user SET active=1 WHERE email = '$email'";
        $result = false;
        $temp = mysqli_query($this->connect, $qr);
        if ($temp) {
            $result = true;
        }
        return json_encode($result);
    }
}
?>