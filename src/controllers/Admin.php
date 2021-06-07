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
        $result = $this->ServiceModel->updateService($sid,$sname,$sdes,$simage,$stask);
        echo $result;
    }

    function insertService(){
        $sname = $_POST["sname"];
        $sdes = $_POST["sdes"];
        $simage = $_POST["simage"];
        $stask = $_POST["stask"];
        $result = $this->ServiceModel->insertService($sname,$sdes,$simage,$stask);
        echo $result;
    }

    function deleteSerVice(){
        $sid = $_POST["sid"];
        $result = $this->ServiceModel->deleteService($sid);
        echo $result;
    }

    

   
}

?>