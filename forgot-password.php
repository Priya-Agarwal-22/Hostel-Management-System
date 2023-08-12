<?php
session_start();
include('admin/include/config.php');
if(isset($_POST['login']))
{
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $stmt=$mysqli->prepare("SELECT email,contactNo,password FROM userregistration WHERE (email=? && contactNo=?) ");
	$stmt->bind_param('ss',$email,$contact);
  $stmt->execute();
	$stmt -> bind_result($username,$email,$password);
	$rs=$stmt->fetch();
	if($rs)
	{
		$pwd=$password;		
    echo $pwd;		
	}
	else
	{
		echo "<script>alert('Invalid Email/Contact no or password');</script>";
	}
}
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	<meta name="author" content="">
    
    <title>Forgot Password</title>

    <link rel="stylesheet" href="css1/forgot-password.css">
</head>
<body>
       <div class="headd" >
            <div class="container col-md-6 col-md-offset-3">
                <h1 class="text-bold text-light mt-4x">Forgot Password</h1>
                <div class="boxx col-md-8 col-md-offset-2" >
                    <form action="got-password.php" class="mt" method="post">
                        <label for="" class="row user" > <h4 id="usertop"> Your Email</h4></label>
                        <input type="text" placeholder="Email" name="email" class="row"><br>
                        <label for="" class="user row"><h4>Your Contact No</h4></label>
                        <input type="text" placeholder="Contact No" name="contact" class="row"><br>
                        <input type="submit" name="login" value="LogIn" class="row" id="login">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>