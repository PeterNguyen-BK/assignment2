<?php
class Admin extends Controller {

    public $UserModel, $ServiceModel;

    public function __construct() {
        $this->UserModel = $this->Model("UserModel");
        $this->ServiceModel = $this->Model("ServiceModel");
    }

    function show(){
        if (isset($_SESSION["admin"])) 
            $this->View("admin", []);
        else header("Location: /assignment2/Home/");
    }

    function showService(){
        if (isset($_SESSION["admin"])) {
            $result = $this->ServiceModel->getService();
            while ($row = mysqli_fetch_array($result)){
                $output[]=$row;
            }
            print(json_encode($output));
        } else header("Location: /assignment2/Home/");
    }

    function updateService(){
        if (isset($_SESSION["admin"]) && isset($_POST["sid"])) {
            $sid = $_POST["sid"];
            $sname = $_POST["sname"];
            $sdes = $_POST["sdes"];
            $simage = $_POST["simage"];
            $stask = $_POST["stask"];
            $cont=$this->ServiceModel->valider_service($sname,$sdes,$simage,$stask);
            if(!$cont){
                echo false;
                return;
            }
            $result = $this->ServiceModel->updateService($sid,$sname,$sdes,$simage,$stask);
            echo $result;
        } else header("Location: /assignment2/Home/");
    }

    function uploadImageService($image, $target_dir) {
        if (isset($_SESSION["admin"])) {
            if (isset($image)) {
                if ($image["error"] > 0) {
                    echo "Hình ảnh tải lên lỗi";
                } else {
                    $target_file   = $target_dir.basename($image["name"]);
                    $allowUpload = true;
                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                    $maxfilesize = 5000000;
                    $allowtypes    = array('jpg', 'png', 'jpeg', 'JPG');
                    $check = getimagesize($image["tmp_name"]);
                    if($check !== false) {
                        $allowUpload = true;
                    } else {
                        echo "File không đúng định dạng";
                        $allowUpload = false;
                    }
                    // if (file_exists($target_file)) {
                    //     echo "Tên file đã tồn tại";
                    //     $allowUpload = false;
                    // }

                    if ($image["size"] > $maxfilesize) {
                        echo "Ảnh vượt quá kích thước cho phép";
                        $allowUpload = false;
                    }
                    if (!in_array($imageFileType,$allowtypes )) {
                        echo "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
                        $allowUpload = false;
                    }
                    return $allowUpload;
                }
            }
        } else header("Location: /assignment2/Home/");
    }

    function insertService(){
        if (isset($_SESSION["admin"]) && isset($_POST["name_add"])) {
            $sname = $_POST["name_add"];
            echo $sname;
            $sdes = $_POST["des_add"];
            $simage = $_FILES["fileUpload"];
            $target_dir = "public/img/services/";
            $allowUp = $this->uploadImageService($simage, $target_dir);
            $stask = $_POST["task_add"];
            $ptime = $_POST["time_add_p"];
            $pmonth = $_POST["month_add_p"];
            $pyear = $_POST["year_add_p"];
            $punit = $_POST["unit_add_p"];
            $target_file   = $target_dir.basename($simage["name"]);
            $cont=$this->ServiceModel->valider_service($sname,$sdes,$target_file,$stask);
            if(!$cont){
                echo false;
                return;
            }
            $cont=$this->ServiceModel->valider_price($ptime,$pmonth,$pyear,$punit);
            if(!$cont){
                echo false;
                return;
            }
            if (!$allowUp) {
                echo false;
                return;
            }
            if (!move_uploaded_file($simage["tmp_name"], $target_file)) {
                echo "Có lỗi xảy ra khi upload file.";

            } else { 
                $result = $this->ServiceModel->insertService($sname,$sdes,$target_file,$stask);
                if($result=='false') {
                    echo $result;
                    return;
                }
                $result1 = $this->ServiceModel->insertPriceService($result,$ptime,$pmonth,$pyear,$punit);
                echo $result1;
                header("Location: /assignment2/Admin/");
            }
        } else header("Location: /assignment2/Home/");
    }

    function deleteSerVice(){
        if (isset($_SESSION["admin"]) && isset($_POST["sid"])) {
            $sid = $_POST["sid"];
            $result = $this->ServiceModel->deletePriceService($sid);
            $result1 = $this->ServiceModel->deleteRatingService($sid);
            if($result=='false' || $result1=='false ') return $result;
            $result = $this->ServiceModel->deleteService($sid);
            echo $result;
        } else header("Location: /assignment2/Home/");
    }

    function showUserList(){
        if (isset($_SESSION["admin"])) {
            $result = $this->UserModel->getUser();
            while ($row = mysqli_fetch_array($result)){
                $output[]=$row;
            }
            print(json_encode($output));
        } else header("Location: /assignment2/Home/");
    }

    function deleteUser(){
        if (isset($_SESSION["admin"]) && isset($_POST["UID"])) {
            $UID = $_POST['UID'];
            $result = $this->UserModel->deleteUser($UID);
            echo $result;
        } else header("Location: /assignment2/Home/");
    }

    
}

?>