<?php
session_start();
include('../include/config.php');
include('../include/checklogin.php');
check_login();
//code for add courses

$coursecode=mysqli_real_escape_string($mysqli,$_POST['cc']);
$coursesn=mysqli_real_escape_string($mysqli,$_POST['cns']);
$coursefn=mysqli_real_escape_string($mysqli,$_POST['cnf']);

$query="insert into courses (course_code,course_sn,course_fn) values(?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sss',$coursecode,$coursesn,$coursefn);
$stmt->execute();
echo "<script>alert('Course has been added successfully');</script>";

?>