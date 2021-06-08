<?php
class ServiceModel extends Database {
    public function getService() {
        $qr = "SELECT * FROM service";
        return mysqli_query($this->connect, $qr);
    }

    public function insertService($name, $description, $image, $task) {
        $qr = "INSERT INTO service VALUES(null, '$name', '$description', '$image', '$task')";
        $result = false;
        $temp = mysqli_query($this->connect, $qr);
        $last_id=1;
        if ($temp) {
            $last_id = mysqli_insert_id($this->connect);
            return $last_id;
        }
        return json_encode($result);
    }

    public function deleteService($SID){
        $qr ="DELETE FROM service WHERE SID=$SID";
        $result = false;
        $temp = mysqli_query($this->connect, $qr);
        if ($temp) {
            $result = true;
        }
        return json_encode($result);
    }

    public function updateService($SID,$name, $description, $image, $task) {
        $qr = "UPDATE service SET name='$name',description='$description',image='$image', task='$task' WHERE SID=$SID";
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
        $qr = "SELECT first_name, last_name, image, star_rating, comment, time FROM rating, user WHERE rating.sid = $sid AND rating.uid = user.uid";
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

    public function getPriceSID($sid) {
        $qr = "SELECT * FROM price WHERE price.sid = $sid";
        return mysqli_query($this->connect, $qr);
    }

    public function getDetailPriceService($sid) {
        $qr = "SELECT * FROM service WHERE service.sid = $sid";
        return mysqli_query($this->connect, $qr);
    }

    public function searchService($service) {
        $qr = "SELECT * FROM service WHERE name LIKE '%$service%'";
        return mysqli_query($this->connect, $qr);
    }

    public function insertPriceService($SID,$ptime, $pmonth, $pyear, $punit) {
        $qr = "INSERT INTO price VALUES($SID, '$ptime', '$pmonth', '$pyear', '$punit')";
        $result = false;
        $temp = mysqli_query($this->connect, $qr);
        if ($temp) {
            $result = true;
        }
        return json_encode($result);
    }

    public function deletePriceService($SID){
        $qr ="DELETE FROM price WHERE SID=$SID";
        $result = false;
        $temp = mysqli_query($this->connect, $qr);
        if ($temp) {
            $result = true;
        }
        return json_encode($result);
    }
    
    public function deleteRatingService($SID){
        $qr ="DELETE FROM rating WHERE SID=$SID";
        $result = false;
        $temp = mysqli_query($this->connect, $qr);
        if ($temp) {
            $result = true;
        }
        return json_encode($result);
    }

    public function updatePriceService($SID,$ptime,$pmonth,$pyear,$punit) {
        $qr = "UPDATE price SET package_in_time='$ptime',package_in_month='$pmonth',package_in_year='$pyear', unit='$punit' WHERE SID=$SID";
        $result = false;
        $temp = mysqli_query($this->connect, $qr);
        if ($temp) {
            $result = true;
        }
        return json_encode($result);
    }

    public function valider_service($name, $description, $image, $task){
        if($name=='') return false;
        else if($description=='') return false;
        else if($image=='') return false;
        else if($task=='') return false;
        else if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $name)) return false;
        else if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $description)) return false;
        else if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $task)) return false;
        else if(strlen($name)>26) return false;
        else if(strlen($description)>1000) return false;
        else if(strlen($image)>100) return false;
        else if(strlen($task)>200) return false;
        return true;
    }

    public function valider_price($ptime,$pmonth,$pyear,$punit){
        if($ptime=='') return false;
        else if($pmonth=='') return false;
        else if($pyear=='') return false;
        else if($punit=='') return false;
        else if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $punit)) return false;
        else if(!is_numeric($ptime)) return false;
        else if(!is_numeric($pmonth)) return false;
        else if(!is_numeric($pyear)) return false;
        else if(strlen($ptime)>9) return false;
        else if(strlen($pmonth)>9) return false;
        else if(strlen($pyear)>9) return false;
        else if(strlen($punit)>10) return false;
        return true;
    }

    public function addPayment($uid, $service, $money){
        $qr = "INSERT INTO payment VALUES($uid, '$service', '$money')";
        $result = false;
        $temp = mysqli_query($this->connect, $qr);
        $last_id=1;
        if ($temp) {
            $last_id = mysqli_insert_id($this->connect);
            return $last_id;
        }
        return json_encode($result);
    }

    public function selectPayment($uid) {
        $qr = "SELECT * FROM payment WHERE payment.uid = $uid";
        return mysqli_query($this->connect, $qr);
    }
}
?>