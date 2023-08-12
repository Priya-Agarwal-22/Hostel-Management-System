<?php
  session_start();
  include('admin/include/config.php');
  include('admin/include/checklogin.php');
  check_login();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Hostel Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css1/book-hostel.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<script>
function getSeater(val) {
$.ajax({
type: "POST",
url: "get_seater.php",
data:'roomid='+val,
success: function(data){
//alert(data);
$('#seater').val(data);
}
});

$.ajax({
type: "POST",
url: "get_seater.php",
data:'rid='+val,
success: function(data){
//alert(data);
$('#fpm').val(data);
}
});
}
</script>

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

<!-- ------------------------------Book Hostel------------------------------ -->

<div class="outer">
        <h1>
          Registration
        </h1><hr>
        </br>

        <div class="box">
            Fill all info
        </div>
        <div class="boxx">
            <form id="myform" name="registration" class="form-horizontal" onSubmit="return valid();">

<!-- ------------------------------Room related info ---------------------- -->

<div class="mb-3">
                    <label class="col-sm-4 control-label"><h4 style="color: green; text-align:left; margin-left: 3%; margin-top: 4%; margin-bottom: 0%;">Room Related info </h4> </label>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 control-label">Room no. </label>
                    <div class="col-sm-8">
                        <select name="room" id="room"class="form-control"  onChange="getSeater(this.value);" onBlur="checkAvailability()" required="required"> 
                            <option value="">Select Room</option>
                            <?php $query ="SELECT * FROM rooms";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->room_no;?>"> <?php echo $row->room_no;?></option>
<?php } ?>
                        </select> 
                        <span id="room-availability-status" style="font-size:12px;"></span>
                    </div>
                </div>
											
<div class="row mb-3">
<label class="col-sm-3 control-label">Seater</label>
<div class="col-sm-8">
<input type="text" name="seater" id="seater"  class="form-control" readonly="true"  >
</div>
</div>

<div class="row mb-3">
<label class="col-sm-3 control-label">Fees Per Month</label>
<div class="col-sm-8">
<input type="text" name="fpm" id="fpm"  class="form-control" readonly="true">
</div>
</div>

<div class="row mb-3">
<label class="col-sm-3 control-label">Food Status</label>
<div class="col-sm-8">
<input type="radio" value="0" name="foodstatus" checked="checked"> Without Food
<input type="radio" value="1" name="foodstatus"> With Food(Rs 2000.00 Per Month Extra)
</div>
</div>	

<div class="row mb-3">
<label class="col-sm-3 control-label">Stay From</label>
<div class="col-sm-8">
<input type="date" name="stayf" id="stayf"  class="form-control" >
</div>
</div>

<div class="row mb-3">
<label class="col-sm-3 control-label">Duration</label>
<div class="col-sm-8">
<select name="duration" id="duration" class="form-control">
<option value="">Select Duration in Month</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
</div>
</div>

<!-- -------------------Personal Info----------------- -->

<div class="mb-3">
<label class="col-sm-3 control-label"><h4 style="color: green; text-align:left;margin-left:-15%;">Personal info </h4> </label>
</div>

<div class="row mb-3">
<label class="col-sm-3 control-label">Course </label>
<div class="col-sm-8">
<select name="course" id="course" class="form-control" required="required"> 
<option value="">Select Course</option>
<?php $query ="SELECT * FROM courses";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->course_fn;?>"><?php echo $row->course_fn;?>&nbsp;&nbsp;(<?php echo $row->course_sn;?>)</option>
<?php } ?>
</select> </div>
</div>

<?php	
$aid=$_SESSION['id'];
	$ret="select * from userregistration where id=?";
		$stmt= $mysqli->prepare($ret) ;
	 $stmt->bind_param('i',$aid);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>

<div class="row mb-3">
<label class="col-sm-3 control-label">Registration No : </label>
<div class="col-sm-8">
<input type="text" name="regno" id="regno"  class="form-control" required="required" value="<?php echo $row->regNo;?>" onBlur="checkRegnoAvailability()" readonly="true">
<span id="user-reg-availability" style="font-size:12px;"></span>
</div>
</div>


<div class="row mb-3">
<label class="col-sm-3 control-label">First Name : </label>
<div class="col-sm-8">
<input type="text" name="fname" id="fname"  class="form-control" value="<?php echo $row->firstName;?>" readonly="true">
</div>
</div>

<div class="row mb-3">
<label class="col-sm-3 control-label">Middle Name : </label>
<div class="col-sm-8">
<input type="text" name="mname" id="mname"  class="form-control" value="<?php echo $row->middleName;?>" readonly="true">
</div>
</div>

<div class="row mb-3">
<label class="col-sm-3 control-label">Last Name : </label>
<div class="col-sm-8">
<input type="text" name="lname" id="lname"  class="form-control" value="<?php echo $row->lastName;?>" readonly="true">
</div>
</div>

<div class="row mb-3">
<label class="col-sm-3 control-label">Gender : </label>
<div class="col-sm-8">
<input type="text" name="gender" class="form-control" value="<?php echo $row->gender;?>" required="required" readonly="true">
</div>
</div>

<div class="row mb-3">
<label class="col-sm-3 control-label">Contact No : </label>
<div class="col-sm-8">
<input type="text" name="contact" id="contact"  class="form-control" value="<?php echo $row->contactNo;?>" required="required" readonly="true">
</div>
</div>


<div class="row mb-3">
<label class="col-sm-3 control-label">Email id : </label>
<div class="col-sm-8">
<input type="email" name="email" id="email"  class="form-control" value="<?php echo $row->email;?>" onBlur="checkAvailability()" required="required" readonly="true">
<span id="user-availability-status" style="font-size:12px;"></span>
</div>
</div>
<?php } ?>
<div class="row mb-3">
<label class="col-sm-3 control-label">Emergency Contact: </label>
<div class="col-sm-8">
<input type="text" name="econtact" id="econtact"  class="form-control" required="required">
</div>
</div>

<div class="row mb-3">
<label class="col-sm-3 control-label">Guardian  Name : </label>
<div class="col-sm-8">
<input type="text" name="gname" id="gname"  class="form-control" required="required">
</div>
</div>

<div class="row mb-3">
<label class="col-sm-3 control-label">Guardian  Relation : </label>
<div class="col-sm-8">
<input type="text" name="grelation" id="grelation"  class="form-control" required="required">
</div>
</div>

<div class="row mb-3">
<label class="col-sm-3 control-label">Guardian Contact no : </label>
<div class="col-sm-8">
<input type="text" name="gcontact" id="gcontact"  class="form-control" required="required">
</div>
</div>	

<!-- ------------------Correspondance Address------------------- -->

<div class="row mb-3">
<label class="col-sm-3 control-label"><h4 style="color: green;">Correspondense Address</h4></label>
</div>


<div class="row mb-3">
<label class="col-sm-3 control-label">Address : </label>
<div class="col-sm-8">
<textarea  rows="5" name="address"  id="address" class="form-control" required="required"></textarea>
</div>
</div>

<div class="row mb-3">
<label class="col-sm-3 control-label">City : </label>
<div class="col-sm-8">
<input type="text" name="city" id="city"  class="form-control" required="required">
</div>
</div>	

<div class="row mb-3">
<label class="col-sm-3 control-label">State </label>
<div class="col-sm-8">
<select name="state" id="state"class="form-control" required> 
<option value="">Select State</option>
<?php $query ="SELECT * FROM states";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->State;?>"><?php echo $row->State;?></option>
<?php } ?>
</select> </div>
</div>							

<div class="row mb-3">
<label class="col-sm-3 control-label">Pincode : </label>
<div class="col-sm-8">
<input type="text" name="pincode" id="pincode"  class="form-control" required="required">
</div>
</div>	

<!-- --------------Permanent Address---------------- -->

<div class="row mb-3">
<label class="col-sm-3 control-label"><h4 style="color: green" align="left">Permanent Address </h4> </label>
</div>


<div class="row mb-3">
<label class="col-sm-3 control-label" style="width:54%;">Permanent Address same as Correspondense address : </label>
<div class="col-sm-8" style="margin-left: 40%; margin-top:-4.1%;">
<input type="checkbox" name="adcheck" value="1"/>
</div>
</div>


<div class="row mb-3">
<label class="col-sm-3 control-label">Address : </label>
<div class="col-sm-8">
<textarea  rows="5" name="paddress"  id="paddress" class="form-control" required="required"></textarea>
</div>
</div>

<div class="row mb-3">
<label class="col-sm-3 control-label">City : </label>
<div class="col-sm-8">
<input type="text" name="pcity" id="pcity"  class="form-control" required="required">
</div>
</div>	

<div class="row mb-3">
<label class="col-sm-3 control-label">State </label>
<div class="col-sm-8">
<select name="pstate" id="pstate"class="form-control" required> 
<option value="">Select State</option>
<?php $query ="SELECT * FROM states";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->State;?>"><?php echo $row->State;?></option>
<?php } ?>
</select> </div>
</div>							

<div class="row mb-3">
<label class="col-sm-3 control-label">Pincode : </label>
<div class="col-sm-8">
<input type="text" name="ppincode" id="ppincode"  class="form-control" required="required">
</div>
</div>	


<div class="col-sm-6 col-sm-offset-4" style="width: 100%;">
<input type="reset" name="submit" Value="Reset" class="btn btn-primary" style="margin-left: 40%;">
<input type="button" id="submit" name="submit" Value="Register" class="btn btn-primary" style="margin-left: 3%;">
</div>
</form>

        </div>
    </div>
        </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <script>
      $("#submit").on("click",function(){
          var Form = $('#myform')[0];
          $.ajax({
            url: "ajax/process-hostelbook.php",
            type: "post",
            data: new FormData(Form),
            contentType:false,
            cache:false,
            processData:false,
            success:function(data){ 
                  toastr.success('Data inserted succsesfully.');
                  console.log(data);
                  $("input").val("");
            }
          });
        });
    </script>
    
</body>

<script type="text/javascript">
	$(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                $('#paddress').val( $('#address').val() );
                $('#pcity').val( $('#city').val() );
                $('#pstate').val( $('#state').val() );
                $('#ppincode').val( $('#pincode').val() );
            } 
            
        });
    });
</script>

<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'roomno='+$("#room").val(),
type: "POST",
success:function(data){
$("#room-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

<script type="text/javascript">

$(document).ready(function() {
	$('#duration').keyup(function(){
		var fetch_dbid = $(this).val();
		$.ajax({
		type:'POST',
		url :"ins-amt.php?action=userid",
		data :{userinfo:fetch_dbid},
		success:function(data){
	    $('.result').val(data);
		}
		});
		

})});
</script>
</html>