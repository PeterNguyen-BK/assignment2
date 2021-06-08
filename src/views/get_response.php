<?php 
require_once("/assignment2/src/core/Config.php");
if((isset($_POST['name']) && $_POST['name'] !='') && (isset($_POST['email']) && $_POST['email'] !=''))
{
 require_once("/assignment2/src/views/contact_mail.php");
$yourName = $this->connect($_POST['name']);
$yourEmail = $this->connect($_POST['email']);
$yourPhone = $this->connect($_POST['phone']);
$yourAddress = $this->connect($_POST['address']);
$comments = $this->connect($_POST['comments']);
$qr = "INSERT INTO contact_form_info (name, email, phone, address, comments) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."','".$yourAddress."', '".$comments."')";
if(!$result = $mysqli_query($this->connect, $qr)){
die('There was an error running the query [' . $this->connect->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please fill Name and Email";
}
?>