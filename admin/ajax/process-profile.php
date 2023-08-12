<?php
session_start();
include('../include/config.php');
include('../include/checklogin.php');
check_login();

//code for update email id

$email=mysqli_real_escape_string($mysqli,$_POST['emailid']);
$aid=mysqli_real_escape_string($mysqli,$_SESSION['id']);
$udate=date('Y-m-d');
$query="update admin set email=?,updation_date=? where id=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssi',$email,$udate,$aid);
$stmt->execute();
echo "Success";

?>