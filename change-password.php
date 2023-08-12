<?php
 session_start();
 include('admin/include/config.php');
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Change Password</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css1/change-password.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>

<body>
  <div class="relative">

 <!-- ------------------------------Header------------------------------- -->
    
 <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color:white; margin: 0;">
        Hostel Management System
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-top text-bg-dark" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel" style="height:70%;">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasTopLabel">Menu</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">

            <div class="row-in">
            <div class="col-lg-9">
              <div class="txt">
                Main
              </div>
            </div>

            <div class="col-lg-9">
              <div class="icon" id="headd" style="width: 10%; display: inline-block;">

              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
              <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
              <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
              </svg>
              </div>
              <div class="txt" style="width: calc(100%-10%); display: inline-block; margin-left:-6%;">
                <a href="dashboard.php">Dashboard</a>
              </div>
            </div>

            <div class="col-lg-9">
              <div class="icon" style="width: 10%; display: inline-block;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark" viewBox="0 0 16 16">
              <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
              </svg>
              </div>
              <div class="txt" style="width: calc(100%-10%); display: inline-block; margin-left:-6%;">
                <a href="book-hostel.php">Book Hostel</a>
              </div>
            </div>

            <div class="col-lg-9">
              <div class="icon" style="width: 30px; display: inline-block;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark" viewBox="0 0 16 16">
              <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
              </svg>
              </div>
              <div class="txt" style="width: calc(100%-10px); display: inline-block;">
              <a href="room-details.php">Room Details</a>
              </div>
            </div>

            <div class="col-lg-9">
              <div class="icon" style="width: 30px; display: inline-block;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
              </svg>
              </div>
              <div class="txt" style="width: calc(100%-10px); display: inline-block;">
              <a href="my-profile.php">My Profile</a>
              </div>
            </div>

            <div class="col-lg-9">
              <div class="icon" style="width: 30px; display: inline-block;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files" viewBox="0 0 16 16">
              <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
              </svg>
              </div>
              <div class="txt" style="width: calc(100%-10px); display: inline-block;">
              <a href="change-password.php">Change Password</a>
              </div>
            </div>

          </div>
          </li>   
          </ul>
        </div>
      </div>
      <div class="drop">
            <ul class="nav justify-content-end">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="drop" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="admin/img/ts-avatar.jpg" alt="" height="15%" width="12%" class="image">Account
                </a>
                <ul class="dropdown-menu" id="dropp">
                    <li><a class="dropdown-item" href="my-profile.php">My Account</a></li>
                    <li><a class="dropdown-item" href="index.php">Logout</a></li>
                </ul>
                </li>
            </ul>
        </div>
    </div>
  </nav>
  <div class="absolute">

<!-- -------------------------Sidebar---------------------------- -->

      <div class="row" >
        <div class="col-sm-4 col-md-3 side-bar bg-dark">
          <div class="row-in">
            <div class="col-lg-9">
              <div class="txt" style="margin-left:10%;">
                Main
              </div>
            </div>

            <div class="col-lg-9">
              <div class="icon" id="headd" style="width: 10%; display: inline-block;">

              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
              <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
              <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
              </svg>
              </div>
              <div class="txt" style="width: calc(100%-10%); display: inline-block; margin-left:3%;">
              <a href="dashboard.php">Dashboard</a>
              </div>
            </div>

            <div class="col-lg-9">
              <div class="icon" style="width: 10%; display: inline-block;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark" viewBox="0 0 16 16">
              <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
              </svg>
              </div>
              <div class="txt" style="width: calc(100%-10%); display: inline-block; margin-left:3%;">
              <a href="book-hostel.php">Book Hostel</a>
              </div>
            </div>

            <div class="col-lg-9">
              <div class="icon" style="width: 30px; display: inline-block;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark" viewBox="0 0 16 16">
              <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
              </svg>
              </div>
              <div class="txt" style="width: calc(100%-10px); display: inline-block;">
              <a href="room-details.php">Room Details</a>
              </div>
            </div>

            <div class="col-lg-9">
              <div class="icon" style="width: 30px; display: inline-block;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
              </svg>
              </div>
              <div class="txt" style="width: calc(100%-10px); display: inline-block;">
              <a href="my-profile.php">My Profile</a>
              </div>
            </div>

            <div class="col-lg-9">
              <div class="icon" style="width: 30px; display: inline-block;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files" viewBox="0 0 16 16">
              <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
              </svg>
              </div>
              <div class="txt" style="width: calc(100%-10px); display: inline-block;">
              <a href="change-password.php">Change Password</a>
              </div>
            </div>

          </div>
        </div>
      </div>

<!-- ------------------------------Change Password------------------------------ -->

<div class="outer">
        <h1>
          Change Password
        </h1><hr>
        </br>

        <div class="box">
<?php 
$query = "SELECT passUdateDate FROM userregistration WHERE id=?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('i', $ai);
$stmt->execute();
$stmt->bind_result($passUpdateDate); // Use a different variable name here
$stmt->fetch();
?>

Last Updation Date: <?php echo $passUpdateDate; ?> </div>
									<div class="panel-body">
				              <form method="post" class="form-horizontal" name="changepwd" id="change-pwd" onSubmit="return valid();">
<?php if(isset($_POST['changepwd']))
{ ?>
											<p style="color: red"><?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg']=""); ?></p>
<?php } ?>
        </div>
        <div class="boxx">
            <form id="myform" name="registration" class="form-horizontal" onSubmit="return valid();">

<div class="row mb-3">
<label for="inputPassword5" class="col-sm-3 control-label">Old Password : </label>
<div class="col-sm-8">
<input type="password" id="oldpassword" name="oldpassword" class="form-control" aria-labelledby="passwordHelpBlock">
</div>
</div>

<div class="row mb-3">
<label for="inputPassword5" class="col-sm-3 control-label">New Password : </label>
<div class="col-sm-8">
<input type="password" id="newpassword" name="newpassword" class="form-control" aria-labelledby="passwordHelpBlock">
</div>
</div>

<div class="row mb-3">
<label for="inputPassword5" class="col-sm-3 control-label">Confirm Password : </label>
<div class="col-sm-8">
<input type="password" id="inputPassword" class="form-control" aria-labelledby="passwordHelpBlock">
</div>
</div>

<div class="col-sm-6 col-sm-offset-4" style="width: 100%;">
<input type="cancel" name="submit" Value="Cancel" class="btn btn-primary" style="margin-left: 20%;">
<input type="button" id="submit" name="submit" Value="Change Password" class="btn btn-primary" style="margin-left: 3%;">
</div>
</form>
        </div>
    </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

    <script type="text/javascript">
function valid()
{

if(document.changepwd.newpassword.value!= document.changepwd.cpassword.value)
{
alert("Password and Re-Type Password Field do not match  !!");
document.changepwd.cpassword.focus();
return false;
}
return true;
}
</script>

<script>
      $("#submit").on("click",function(){
          var Form = $('#myform')[0];
          $.ajax({
            url: "ajax/process-pass.php",
            type: "post",
            data: new FormData(Form),
            contentType:false,
            cache:false,
            processData:false,
            success:function(data){
              if(data=='Exist')
                {
                  toastr.error("Old Password doesn't match");
                }
              else
                {   
                  toastr.success('Password changed succsesfully.');
                  console.log(data);
                  $("input").val("");
                }
            }
          });
        });
    </script>

</body>

</html>