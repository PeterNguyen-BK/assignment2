<?php
class Price extends Controller {

    public $ServiceModel, $UserModel;

    public function __construct() {
        $this->ServiceModel = $this->Model("ServiceModel");
        $this->UserModel = $this->Model("UserModel");
    }

    function show() {
        $data = $this->ServiceModel->getPriceService();
        $this->View("price", $data);
    }

    function showPrice(){
        $result = $this->ServiceModel->getPriceService();
        while ($row = mysqli_fetch_array($result)){
          $output[]=$row;
        }
        print(json_encode($output));    
    }

    function insertPrice(){
        $ptime = $_POST["ptime"];
        $pmonth = $_POST["pmonth"];
        $pyear = $_POST["pyear"];
        $punit = $_POST["punit"];
        $result = $this->ServiceModel->insertPriceService($ptime,$pmonth,$pyear,$punit);
        echo $result;
    }

    function updatePrice(){
        $SID=$_POST["sid"];
        $ptime = $_POST["ptime"];
        $pmonth = $_POST["pmonth"];
        $pyear = $_POST["pyear"];
        $punit = $_POST["punit"];
        $cont=$this->ServiceModel->valider_price($ptime,$pmonth,$pyear,$punit);
        if(!$cont){
            echo false;
            return;
        }
        $result = $this->ServiceModel->updatePriceService($SID,$ptime,$pmonth,$pyear,$punit);
        echo $result;
    }

    function payment($package, $sid) {
        if (isset($_SESSION["login"])) {
            $uid = $_SESSION["user"];
            $data = $this->ServiceModel->getDetailPriceService($sid);
            $data2 = $this->UserModel->getDetailUser($uid);
        }
    }
}
?>