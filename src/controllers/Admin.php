<?php
class Admin extends Controller {

    public $UserModel, $ServiceModel;

    public function __construct() {
        $this->UserModel = $this->Model("UserModel");
        $this->ServiceModel = $this->Model("ServiceModel");
    }

    function showService(){
      $result = $this->ServiceModel->getService();
      while ($row = mysqli_fetch_array($result)){
        $output[]=$row;
      }
      print(json_encode($output));
    }

    function updateService(){
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
    }

    function insertService(){
        $sname = $_POST["sname"];
        $sdes = $_POST["sdes"];
        $simage = $_POST["simage"];
        $stask = $_POST["stask"];
        $ptime = $_POST["ptime"];
        $pmonth = $_POST["pmonth"];
        $pyear = $_POST["pyear"];
        $punit = $_POST["punit"];
        $cont=$this->ServiceModel->valider_service($sname,$sdes,$simage,$stask);
        if(!$cont){
            echo false;
            return;
        }
        $cont=$this->ServiceModel->valider_price($ptime,$pmonth,$pyear,$punit);
        if(!$cont){
            echo false;
            return;
        }
        $result = $this->ServiceModel->insertService($sname,$sdes,$simage,$stask);
        if($result=='false') {
            echo $result;
            return;
        }
        $result1 = $this->ServiceModel->insertPriceService($result,$ptime,$pmonth,$pyear,$punit);
        echo $result1;

    }

    function deleteSerVice(){
        $sid = $_POST["sid"];
        $result = $this->ServiceModel->deletePriceService($sid);
        if($result=='false') return $result;
        $result = $this->ServiceModel->deleteService($sid);
        echo $result;
    }

    function showUserList(){
        $result = $this->UserModel->getUser();
        while ($row = mysqli_fetch_array($result)){
            $output[]=$row;
        }
        print(json_encode($output));
    }

    function deleteUser(){
        $UID = $_POST['UID'];
        $result = $this->UserModel->deleteUser($UID);
        echo $result;
    }
   
}

?>