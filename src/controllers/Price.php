<?php
class Price extends Controller {

    public $ServiceModel;

    public function __construct() {
        $this->ServiceModel = $this->Model("ServiceModel");
    }

    function show() {
        $data = $this->ServiceModel->getPriceService();
        $this->View("price", $data);
    }
}
?>