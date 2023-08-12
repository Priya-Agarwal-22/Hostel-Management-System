<?php
session_start();
include('../admin/include/config.php');
date_default_timezone_set('Asia/Kolkata');
include('../admin/include/checklogin.php');
check_login();
$ai=$_SESSION['id'];
// code for change password

  $op=mysqli_real_escape_string($mysqli,$_POST['oldpassword']);
  $np=mysqli_real_escape_string($mysqli,$_POST['newpassword']);
  $udate=date('d-m-Y h:i:s', time());;
	$sql="SELECT password FROM userregistration where password=?";
	$chngpwd = $mysqli->prepare($sql);
	$chngpwd->bind_param('s',$op);
	$chngpwd->execute();
	$chngpwd->store_result(); 
  $row_cnt=$chngpwd->num_rows;

	if($row_cnt>0)
	{
		$con="update userregistration set password=?,passUdateDate=?  where id=?";
        $chngpwd1 = $mysqli->prepare($con);
        $chngpwd1->bind_param('ssi',$np,$udate,$ai);
        $chngpwd1->execute();
        echo "success";
		//$_SESSION['msg']="Password Changed Successfully !!";
	}
	else
	{
        echo "Exists";
		//$_SESSION['msg']="Old Password not match !!";
	}	

?>