<?php
	class Payment extends Controller
	{
		public $ServiceModel, $UserModel;

	    public function __construct() {
	        $this->ServiceModel = $this->Model("ServiceModel");
	        $this->UserModel = $this->Model("UserModel");
	    }

	    function success(){
	    	if (isset($_SESSION["login"])) {
	            $uid = $_SESSION["user"];
                $sid = $_POST["sid"];
                $money = $_POST["money"];
	            $data = $this->ServiceModel->getDetailPriceService($sid);
	            $price = $this->ServiceModel->getPriceSID($sid);
	            $data3 = 0;
	            while ($row = mysqli_fetch_assoc($data)) {
	                $name = $row["name"];
	            }
				$row1 = mysqli_fetch_assoc($price);
				if ($money == 0){
                    $data3 = $row1["package_in_time"];
                }
                elseif ($money == 1) {
                    $data3 = $row1["package_in_month"];
                }
                else {
                    $data3 = $row1["package_in_year"];
                }
	            $result = $this->ServiceModel->addPayment($uid, $name, $data3, $money);
	            if (!$result) echo "Fail";
	        }
	    }
	}
?>