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

    function payment($package, $sid) {
        $uid = $_SESSION["user"];
        $data = $this->ServiceModel->getDetailPriceService($sid);
        $data2 = $this->UserModel->getDetailUser($uid);
    }
}
?>