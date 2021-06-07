<?php
class UserModel extends Database {
    public function getUser() {
        $qr = "SELECT * FROM User";
        return mysqli_query($this->connect, $qr);
    }

    public function insertUser($fname, $lname, $address, $phone, $email, $password) {
        $qr = "INSERT INTO user VALUES(null, '$fname', '$lname', '$address', '$phone', '$email', '$password')";
        $result = false;
        $temp = mysqli_query($this->connect, $qr);
        if ($temp) {
            $result = true;
        }
        return json_encode($result);
    }

    public function updateUser($fname, $lname, $address, $phone, $id) {
        $qr = "UPDATE user SET first_name='$fname', last_name='$lname', address='$address', phone='$phone' WHERE UID=$id";
        $temp = mysqli_query($this->connect, $qr);
        if ($temp) {
            $result = true;
        }
        return json_encode($result);
    }

    public function deleteUser($UID){
        $qr ="DELETE FROM user WHERE UID=$UID";
        $result = false;
        $temp = mysqli_query($this->connect, $qr);
        if ($temp) {
            $result = true;
        }
        return json_encode($result);
    }
}
?>