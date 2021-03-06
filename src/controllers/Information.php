<?php
class Information extends Controller {

    public $ServiceModel;

    public function __construct() {
        $this->ServiceModel = $this->Model("ServiceModel");
    }

    function show() {
        $data = $this->ServiceModel->getService();
        $this->View("information", $data);
    }

    function service($sid) {
        date_default_timezone_set('Asia/Saigon');
        if (isset($_POST["btnRate"])) {
            $star_rating = $_POST["star"];
            $comment = $_POST["comment"];
            $user = $_SESSION["user"];
            $time = date("d/m/Y");
            $result = $this->ServiceModel->insertRatingService($star_rating, $comment, $time, $sid, $user);
        }
        $data = $this->ServiceModel->getRatingService($sid);
        $data2 = $this->ServiceModel->getDetailService($sid);
        $data3 = $this->ServiceModel->getRatingService($sid);
        $this->View("service", [$data,$data2,$data3]);
    }

    function search() {
        $service = $_POST["service"];
        $result = "";
        $data = $this->ServiceModel->searchService($service);
        $count = 0;
        while ($row = mysqli_fetch_assoc($data)) {
            $count++;
            if ($count != $data->{"num_rows"}) $result .= $row["name"]."-".$row["SID"].",";
            else $result .= $row["name"]."-".$row["SID"];
        }
        echo $result;
    }
}
?>