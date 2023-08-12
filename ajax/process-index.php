<?php
    session_start();
    include('../admin/include/config.php');

    $emailreg=mysqli_real_escape_string($mysqli,$_POST['emailreg']);
    $password=mysqli_real_escape_string($mysqli,$_POST['password']);
    /*$stmt=$mysqli->prepare("SELECT email,password,id FROM userregistration WHERE (email=? or regNo=?) and password=? ");
		$stmt->bind_param('sss',$emailreg,$emailreg,$password);
		$stmt->execute();
		$stmt -> bind_result($email,$password,$id);
		$rs=$stmt->fetch_assoc();
		$stmt->close();*/
    $query=mysqli_query($mysqli,"select * from userregistration where email='$emailreg' and password='$password'");
    $num=mysqli_num_rows($query);

		if($num>0)
		  {
        $rs=mysqli_fetch_array($query);
        $_SESSION['id']=$rs['id'];
        $_SESSION['email']=$rs['email'];
        $uid=$_SESSION['id'];
        $uemail=$_SESSION['email'];
        $login_time=date("Y-m-d h:i:s");
        $log="insert into userLog(userId,userEmail,loginTime) values('$uid','$uemail','$login_time')";
        $mysqli->query($log);
        if($log)
          {
            echo "Success";
			    }
        else
          {
            echo "Error";
          }  
      }
		else
		  {
			  echo "Exist";
		  }

?>