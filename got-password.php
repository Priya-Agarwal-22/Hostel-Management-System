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

    <link rel="stylesheet" href="css1/got-password.css">
</head>
<body>
       <div class="headd" >
            <div class="container col-md-6 col-md-offset-3">
                <div class="boxx col-md-8 col-md-offset-2" >
                    <form action="" class="mt" method="post">
<?php if(isset($_POST['login']))
{ 
if($rs){?>
<p>Your Password is <?php echo $pwd;?></p></a>
<?php } } ?>
                        <a href="index.php">SignIn</a>
                        <a href="change-password.php">Change Password</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>