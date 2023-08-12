<?php
  session_start();
  include('../include/config.php');

    $username = mysqli_real_escape_string($mysqli,$_POST['username']);
    $password = mysqli_real_escape_string($mysqli,$_POST['password']);
    $stmt = $mysqli->prepare("SELECT username,email,password,id FROM admin WHERE (username=? || email=?) and password=?");
    $stmt->bind_param('sss',$username,$username,$password);
    $stmt->execute();
    $stmt->bind_result($username,$username,$password,$id);
    $rs = $stmt->fetch();   
    $_SESSION['id']=$id;
	$uip=$_SERVER['REMOTE_ADDR'];
	$ldate=date('d/m/Y h:i:s', time());
	if($rs)
	{
        echo "Success";
    }
    else
    {
        echo "<script>alert('Invalid Username/Email or password');</script>";
    }

?>