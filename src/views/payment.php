<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <link rel="stylesheet" href="/assignment2/public/styles/service.css">
</head>
<body>
    <?php require_once "./src/views/layouts/header.php"?>
    <div class="content">
	    <?php require_once "./src/views/layouts/login.php"?>
	   	<div class="container layout">
	        <form class="confirm">
	        	<?php 
				    while($row = mysqli_fetch_assoc($data[1])){
				    	$name = array($row["first_name"],$row["last_name"]);
				    	$name = join(" ",$name);
				    	$address = $row["address"];
				    	$phone = $row["phone"];
				    	$email = $row["email"];
				    	$uid = $row["UID"];
				    }

				    while($row = mysqli_fetch_assoc($data[0])){
				    	$service = $row["name"];
				    	$sid = $row["SID"];
				    }
	        	?>
	        	<h3>Xác nhận thanh toán</h3>
	        	<table class="table-info1">
	        		<tr>
	        			<td>Khách hàng:</td>
	        			<td><b><?php echo $name;?> </b></td>
	        		</tr>
	        		<tr>
	        			<td>Email:</td>
	        			<td><?php echo $email;?></td>
	        		</tr>
	        		<tr>
	        			<td>Số điện thoại:</td>
	        			<td><?php echo $phone;?></td>
	        		</tr>
	        		<tr>
	        			<td>Địa chỉ nhà: </td>
	        			<td><?php echo $address;?></td>
	        		</tr>
	        		<tr>
	        			<td>Dịch vụ:</td>
	        			<td><b><?php echo $service;?></b></td>
	        		</tr>
	        		<tr>
	        			<td>Thành tiền: </td>
	        			<td><b><?php echo $data[2];?></b></td>
	        		</tr>
	        	</table>
	        	<button type="button" class="btn btn-warning" id="btnPay">Xác nhận</button>
	        	<a href="/assignment2/Information/" class="btn btn-warning">Hủy</a>
	        </form>
	    </div>
    </div>
    <?php require_once "./src/views/layouts/footer.php"?>
    <script src="https://use.fontawesome.com/6da8d8b501.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/assignment2/public/scripts/script.js"></script>
    <script src="/assignment2/public/scripts/price.js"></script>
</body>
</html>