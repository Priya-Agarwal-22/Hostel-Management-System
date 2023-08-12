<?php
  session_start();
  include('../admin/include/config.php');
  $regno=mysqli_real_escape_string($mysqli,$_POST['regno']);
  $fname=mysqli_real_escape_string($mysqli,$_POST['fname']);
  $mname=mysqli_real_escape_string($mysqli,$_POST['mname']);
  $lname=mysqli_real_escape_string($mysqli,$_POST['lname']);
  $gender=mysqli_real_escape_string($mysqli,$_POST['gender']);
  $contactno=mysqli_real_escape_string($mysqli,$_POST['contact']);
  $emailid=mysqli_real_escape_string($mysqli,$_POST['email']);
  $password=mysqli_real_escape_string($mysqli,$_POST['password']);
  
	$result ="SELECT count(*) FROM userRegistration WHERE email=? OR regno=?";
	$stmt = $mysqli->prepare($result);
	$stmt->bind_param('ss',$emailid,$regno);
	$stmt->execute();
  $stmt->bind_result($count);
  $stmt->fetch();
  $stmt->close();
  if($count>0)
    {
      echo"Exist";
    }
  else
    {
      $query="insert into  userRegistration(regNo,firstName,middleName,lastName,gender,contactNo,email,password) values(?,?,?,?,?,?,?,?)";
      $stmt = $mysqli->prepare($query);
      $rc=$stmt->bind_param('sssssiss',$regno,$fname,$mname,$lname,$gender,$contactno,$emailid,$password);
      $stmt->execute();
      $row=$stmt->store_result();
      echo "Success";
   }

?>