<?php
session_start();
include('../include/config.php');
include('../include/checklogin.php');
check_login();
//code for add courses

$seater=mysqli_real_escape_string($mysqli,$_POST['seater']);
$roomno=mysqli_real_escape_string($mysqli,$_POST['rmno']);
$fees=mysqli_real_escape_string($mysqli,$_POST['fee']);

$sql="SELECT room_no FROM rooms where room_no=?";
$stmt1 = $mysqli->prepare($sql);
$stmt1->bind_param('i',$roomno);
$stmt1->execute();
$stmt1->store_result(); 
$row_cnt=$stmt1->num_rows;;
if($row_cnt>0)
{
echo "Exists";
}
else
{
$query="insert into  rooms (seater,room_no,fees) values(?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('iii',$seater,$roomno,$fees);
$stmt->execute();
echo "Success";
}

?>