<?php
class ServiceModel extends Database {
    public function getService() {
        $qr = "SELECT * FROM service";
        return mysqli_query($this->connect, $qr);
    }

    public function insertService($name, $description, $image) {
        $qr = "INSERT INTO service VALUES(null, '$name', '$description', '$image')";
        $result = false;
        $temp = mysqli_query($this->connect, $qr);
        if ($temp) {
            $result = true;
        }
        return json_encode($result);
    }

    public function getDetailService($sid) {
        $qr = "SELECT * FROM service WHERE sid = $sid";
        return mysqli_query($this->connect, $qr);
    }

    public function getRatingService($sid) {
        $qr = "SELECT first_name, last_name, star_rating, comment, time FROM rating, user WHERE rating.sid = $sid AND rating.uid = user.uid";
        return mysqli_query($this->connect, $qr);
    }

    public function insertRatingService($star_rating, $comment, $time, $sid, $uid) {
        $qr = "INSERT INTO rating VALUES(null, '$star_rating', '$comment', '$time', '$sid', '$uid')";
        $result = false;
        $temp = mysqli_query($this->connect, $qr);
        if ($temp) {
            $result = true;
        }
        return json_encode($result);
    }

    public function getComment($uid) {
        $qr = "SELECT name, comment, time FROM rating, service WHERE rating.uid = $uid AND rating.sid = service.sid";
        return mysqli_query($this->connect, $qr);
    }

    public function getPriceService() {
        $qr = "SELECT * FROM service, price WHERE service.sid = price.sid";
        return mysqli_query($this->connect, $qr);
    }
}
?>