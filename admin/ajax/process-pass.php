<?php
session_start();
include('../include/config.php');
include('../include/checklogin.php');
check_login();

// code for change password

$op=mysqli_real_escape_string($mysqli,$_POST['oldpassword']);
$np=mysqli_real_escape_string($mysqli,$_POST['newpassword']);
$ai=$_SESSION['id'];
$udate=date('Y-m-d');
$sql="SELECT password FROM admin where password=?";
$chngpwd = $mysqli->prepare($sql);
$chngpwd->bind_param('s',$op);
$chngpwd->execute();
$chngpwd->store_result(); 
$row_cnt=$chngpwd->num_rows;;
if($row_cnt>0)
{
    $con="update admin set password=?,updation_date=?  where id=?";
    $chngpwd1 = $mysqli->prepare($con);
    $chngpwd1->bind_param('ssi',$np,$udate,$ai);
    $chngpwd1->execute();
    echo "Success";
}
else
{
    echo "Exists";
}	

?>