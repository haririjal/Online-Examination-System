<?php
$cpass=$_POST['current_password'];
$npass = $_POST['new_password'];
$conpass = $_POST['confirm_password'];


	$q = "update admin_acc set admin_pass='$conpass'  where admin_id='1'";


$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
$db = mysqli_select_db($con,"cee_db") or die(mysqli_error($con));

$res = mysqli_query($con,$q) or die(mysqli_error($con));
echo "Your Password has been updated.";
header("location:home.php");

?>