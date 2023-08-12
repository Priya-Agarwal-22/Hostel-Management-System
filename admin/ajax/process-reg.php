<?php
session_start();
include('../include/config.php');
include('../include/checklogin.php');
check_login();
//code for registration

$roomno=mysqli_real_escape_string($mysqli,$_POST['room']);
$seater=mysqli_real_escape_string($mysqli,$_POST['seater']);
$feespm=mysqli_real_escape_string($mysqli,$_POST['fpm']);
$foodstatus=mysqli_real_escape_string($mysqli,$_POST['foodstatus']);
$stayfrom=mysqli_real_escape_string($mysqli,$_POST['stayf']);
$duration=mysqli_real_escape_string($mysqli,$_POST['duration']);
$course=mysqli_real_escape_string($mysqli,$_POST['course']);
$regno=mysqli_real_escape_string($mysqli,$_POST['regno']);
$fname=mysqli_real_escape_string($mysqli,$_POST['fname']);
$mname=mysqli_real_escape_string($mysqli,$_POST['mname']);
$lname=mysqli_real_escape_string($mysqli,$_POST['lname']);
$gender=mysqli_real_escape_string($mysqli,$_POST['gender']);
$contactno=mysqli_real_escape_string($mysqli,$_POST['contact']);
$emailid=mysqli_real_escape_string($mysqli,$_POST['email']);
$emcntno=mysqli_real_escape_string($mysqli,$_POST['econtact']);
$gurname=mysqli_real_escape_string($mysqli,$_POST['gname']);
$gurrelation=mysqli_real_escape_string($mysqli,$_POST['grelation']);
$gurcntno=mysqli_real_escape_string($mysqli,$_POST['gcontact']);
$caddress=mysqli_real_escape_string($mysqli,$_POST['address']);
$ccity=mysqli_real_escape_string($mysqli,$_POST['city']);
$cstate=mysqli_real_escape_string($mysqli,$_POST['state']);
$cpincode=mysqli_real_escape_string($mysqli,$_POST['pincode']);
$paddress=mysqli_real_escape_string($mysqli,$_POST['paddress']);
$pcity=mysqli_real_escape_string($mysqli,$_POST['pcity']);
$pstate=mysqli_real_escape_string($mysqli,$_POST['pstate']);
$ppincode=mysqli_real_escape_string($mysqli,$_POST['ppincode']);

$query="insert into  registration(roomno,seater,feespm,foodstatus,stayfrom,duration,course,regno,firstName,middleName,lastName,gender,contactno,emailid,egycontactno,guardianName,guardianRelation,guardianContactno,corresAddress,corresCIty,corresState,corresPincode,pmntAddress,pmntCity,pmnatetState,pmntPincode) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('iiiisisissssisississsisssi',$roomno,$seater,$feespm,$foodstatus,$stayfrom,$duration,$course,$regno,$fname,$mname,$lname,$gender,$contactno,$emailid,$emcntno,$gurname,$gurrelation,$gurcntno,$caddress,$ccity,$cstate,$cpincode,$paddress,$pcity,$pstate,$ppincode);
$stmt->execute();
echo"<script>alert('Student Succssfully register');</script>";

?>