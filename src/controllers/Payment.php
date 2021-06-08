<?php
	class payment extends Controller
	{
		public $ServiceModel, $UserModel;

	    public function __construct() {
	        $this->ServiceModel = $this->Model("ServiceModel");
	        $this->UserModel = $this->Model("UserModel");
	    }

	    function success($sid, $money){
	    	if (isset($_SESSION["login"])) {
	            $uid = $_SESSION["user"];
	            $data = $this->ServiceModel->getDetailPriceService($sid);
	            $price = $this->ServiceModel->getPriceSID($sid);
	            $data3 = 0;
	            while ($row = mysqli_fetch_assoc($data)) {
	                $name = $row["name"];
	            }
	            $this->ServiceModel->addPayment($uid, $name, $money);
	            $user = $this->UserModel->getDetailUser($_SESSION["user"]);
	            $comment = $this->ServiceModel->getComment($_SESSION["user"]);
	            $service = $this->ServiceModel->selectPayment($_SESSION["user"]);
	            $this->View("userInfo", [$user, $comment, $service]);
	        }
	    }
	}
?>