
<?php

if (isset($_POST['submit'])) {

$name = $_POST['name'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$emailFrom = $_POST['email'];
$message = $_POST['message'];

$emailTo = "Narmin@northshoreadvisors.co";
$headers  = "From: ".$emailFrom;
$txt = "You have recieved an e-mail from " .$name. ". \n\n" .$message ;



mail($emailTo,$subject ,$txt,$headers );


}
