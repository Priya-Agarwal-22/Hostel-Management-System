<?php
session_start();
include('../admin/include/config.php');
date_default_timezone_set('Asia/Kolkata');
include('../admin/include/checklogin.php');
check_login();
$aid=$_SESSION['id'];

$fname=mysqli_real_escape_string($mysqli,$_POST['fname']);
$mname=mysqli_real_escape_string($mysqli,$_POST['mname']);
$lname=mysqli_real_escape_string($mysqli,$_POST['lname']);
$gender=mysqli_real_escape_string($mysqli,$_POST['gender']);
$contactno=mysqli_real_escape_string($mysqli,$_POST['contact']);
$udate = date('d-m-Y h:i:s', time());
$query="update  userRegistration set firstName=?,middleName=?,lastName=?,gender=?,contactNo=?,updationDate=? where id=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssssisi',$fname,$mname,$lname,$gender,$contactno,$udate,$aid);
$stmt->execute();
echo"<script>alert('Profile updated Succssfully');</script>";

?>