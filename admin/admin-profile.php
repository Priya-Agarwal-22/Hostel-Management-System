<?php
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css/admin-profile.css">
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
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files" viewBox="0 0 16 16">
              <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
              </svg>
              </div>
              <div class="txt" style="width: calc(100%-10%); display: inline-block; margin-left:-6%;">
              <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">
                Courses
              </a>
              </div>
              <div class="collapse" id="collapseExample">
              <ul type="none">
              <li><a class="dropdown-item" href="add-courses.php">Add Courses</a></li>
              <li><a class="dropdown-item" href="manage-courses.php">Manage Courses</a></li>
              </ul></div>
            </div>

            <div class="col-lg-9">
              <div class="icon" style="width: 30px; display: inline-block;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tv" viewBox="0 0 16 16">
              <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM13.991 3l.024.001a1.46 1.46 0 0 1 .538.143.757.757 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.464 1.464 0 0 1-.143.538.758.758 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.464 1.464 0 0 1-.538-.143.758.758 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.46 1.46 0 0 1 .143-.538.758.758 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3h11.991zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z"/>
              </svg>
              </div>
              <div class="txt" style="width: calc(100%-10px); display: inline-block;">
              <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">
                Rooms
              </a>
              </div>
              <div class="collapse" id="collapseExample">
              <ul type="none">
              <li><a class="dropdown-item" href="create-room.php">Add a room</a></li>
              <li><a class="dropdown-item" href="manage-room.php">Manage room</a></li>
              </ul></div>
            </div>

            <div class="col-lg-9">
              <div class="icon" style="width: 30px; display: inline-block;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                            </svg>
              </div>
              <div class="txt" style="width: calc(100%-10px); display: inline-block;">
              <a href="registration.php">Student Registration</a>
              </div>
            </div>

            <div class="col-lg-9">
              <div class="icon" style="width: 30px; display: inline-block;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                            </svg>
              </div>
              <div class="txt" style="width: calc(100%-10px); display: inline-block;">
              <a href="manage-student.php">Manage Students</a>
              </div>
            </div>

          </div>
          </li>   
          </ul>
        </div>
      </div>
      <div class="drop">
            <ul class="nav justify-content-end" style="background-color:black; color:white;">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="drop" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="img/ts-avatar.jpg" alt="" height="50%" width="12%" class="image">Account
                </a>
                <ul class="dropdown-menu" id="dropp">
                    <li><a class="dropdown-item" href="../my-profile.php">My Account</a></li>
                    <li><a class="dropdown-item" href="../index.php">Logout</a></li>
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
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files" viewBox="0 0 16 16">
                                <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z"/>
                                </svg>
              </div>
              <div class="txt" style="width: calc(100%-10%); display: inline-block; margin-left:3%;">
              <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Courses
              </a>
              </div>
              <div class="collapse" id="collapseExample">
              <ul type="none">
              <li><a class="dropdown-item" href="add-courses.php">Add Courses</a></li>
              <li><a class="dropdown-item" href="manage-courses.php">Manage Courses</a></li>
              </ul></div>
            </div>

            <div class="col-lg-9">
              <div class="icon" style="width: 30px; display: inline-block;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tv" viewBox="0 0 16 16">
              <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM13.991 3l.024.001a1.46 1.46 0 0 1 .538.143.757.757 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.464 1.464 0 0 1-.143.538.758.758 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.464 1.464 0 0 1-.538-.143.758.758 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.46 1.46 0 0 1 .143-.538.758.758 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3h11.991zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z"/>
              </svg>
              </div>
              <div class="txt" style="width: calc(100%-10px); display: inline-block;">
              <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Rooms
              </a>
              </div>
              <div class="collapse" id="collapseExample">
              <ul type="none">
              <li><a class="dropdown-item" href="create-room.php">Add a room</a></li>
              <li><a class="dropdown-item" href="manage-room.php">Manage room</a></li>
              </ul></div>
            </div>

            <div class="col-lg-9">
              <div class="icon" style="width: 30px; display: inline-block;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
              </svg>
              </div>
              <div class="txt" style="width: calc(100%-10px); display: inline-block;">
              <a href="registration.php">Student Registration</a>
              </div>
            </div>

            <div class="col-lg-9">
              <div class="icon" style="width: 30px; display: inline-block;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
              <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
              </svg>
              </div>
              <div class="txt" style="width: calc(100%-10px); display: inline-block;">
              <a href="manage-student.php">Manage Students</a>
              </div>
            </div>

          </div>
        </div>
      </div>

<!-- -----------------------Admin Profile--------------------- -->

<div class="outer">
                    <h1 style="text-align: left;">Admin Profile</h1>
                <hr>
                <?php	
$aid=$_SESSION['id'];
	$ret="select * from admin where id=?";
		$stmt= $mysqli->prepare($ret) ;
	 $stmt->bind_param('i',$aid);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>
                
                <div class="container text-center">
                    <div class="box">
                        Admin profile details
                    </div>
                    <div class="boxx">
                        <form id="myform">
                            <div class="row mb-3">
                                <label for="inputcode" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-10">
                                <input type="text" value="<?php echo $row->username;?>" disabled class="form-control"><span class="help-block m-b-none">
													Username can't be changed.</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputcode" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control" name="emailid" id="emailid" value="<?php echo $row->email;?>" required="required">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputcode" class="col-sm-3 col-form-label">Reg Date</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $row->reg_date;?>" disabled >
                                </div>
                            </div>
                            <div class="col-sm-8 col-sm-offset-2">
													<!-- <button class="btn btn-default" type="submit" style="border: 1px solid black;color: black">Cancel</button> -->
													<input class="btn btn-primary" type="button" id="submit" name="update" value="Update Profile" style="margin-top:5%;">
												</div>
                        </form>
                    </div>
<?php }  ?>

                    <div class="box box2">
                        Change Password
                    </div>
                    <div class="boxx boxx2">
                        <form id="myform1" class="form-horizontal" name="changepwd" id="change-pwd" onSubmit="return valid();">
                        <?php if(isset($_POST['changepwd']))
{ ?>
<p style="color: red"><?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg']=""); ?></p>
											<?php } ?>
                            <div class="row mb-3">
                                <label for="inputcode" class="col-sm-3 col-form-label">Old Password</label>
                                <div class="col-sm-10">
                                <input type="password" value="" name="oldpassword" id="oldpassword" class="form-control" onBlur="checkpass()" required="required">
									 <span id="password-availability-status" class="help-block m-b-none" style="font-size:12px;"></span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputcode" class="col-sm-3 col-form-label">New Password</label>
                                <div class="col-sm-10">
                                <input type="password" class="form-control" name="newpassword" id="newpassword" value="" required="required">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputcode" class="col-sm-3 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                <input type="password" class="form-control" value="" required="required" id="cpassword" name="cpassword" >
                                </div>
                            </div>
                            <div class="col-sm-6 col-sm-offset-4">
													<!-- <button class="btn btn-default" type="submit">Cancel</button> -->
													<input type="button" id="submits" name="changepwd" Value="Change Password" class="btn btn-primary"  style="margin-top:5%;">
											</div>
                    </div>
                </div>
                
                </div>
    </div>

        </div>
    </div>



  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

    <script>
      $("#submit").on("click",function(){
          var Form = $('#myform')[0];
          $.ajax({
            url: "ajax/process-profile.php",
            type: "post",
            data: new FormData(Form),
            contentType:false,
            cache:false,
            processData:false,
            success:function(data){  
                  toastr.success('Email id has been successfully updated.');
                  console.log(data);
                  $("input").val("");
            }
          });
        });
    </script>

<script>
      $("#submits").on("click",function(){
          var Form = $('#myform1')[0];
          $.ajax({
            url: "ajax/process-pass.php",
            type: "post",
            data: new FormData(Form),
            contentType:false,
            cache:false,
            processData:false,
            success:function(data){  
              if(data == 'Exists')
              {
                toastr.error('Old Password not match !!');
              }
              else
              {
                toastr.success('Password Changed Successfully !!');
                console.log(data);
                $("input").val("");
              }
            }
          });
        });
    </script>

</body>

</html>