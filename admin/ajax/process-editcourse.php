<?php
session_start();
include('../include/config.php');
include('../include/checklogin.php');
check_login();
//code for add courses

$course_code=mysqli_real_escape_string($mysqli,$_POST['cc']);
$course_sn=mysqli_real_escape_string($mysqli,$_POST['cns']);
$course_fn=mysqli_real_escape_string($mysqli,$_POST['cnf']);
$course_id=mysqli_real_escape_string($mysqli,$_POST['course_id']);

$query="UPDATE courses SET course_code=?,course_sn=?,course_fn=? where id=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sssi',$course_code,$course_sn,$course_fn,$course_id);
$rc=$stmt->execute();
$rc=$stmt->store_result();
if($rc)
    echo "Success";
else 
    echo "Error";

?> 