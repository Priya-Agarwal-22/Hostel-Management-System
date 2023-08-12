<?php
session_start();
include('../include/config.php');
include('../include/checklogin.php');
check_login();
//code for add courses

$rmno=mysqli_real_escape_string($mysqli,$_POST['rmno']);
$fees=mysqli_real_escape_string($mysqli,$_POST['fee']);
$course_id=mysqli_real_escape_string($mysqli,$_POST['course_id']);

$query="UPDATE rooms SET room_no=?,fees=? where id=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('iii',$rmno,$fees,$course_id);
$rc=$stmt->execute();
$rc=$stmt->store_result();
if($rc)
    echo "Success";
else 
    echo "Error";

?>