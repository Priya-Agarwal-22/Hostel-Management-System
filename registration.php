<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
  <link rel="stylesheet" href="css1/registration.css">
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
      <a class="navbar-brand" href="#" style="color:rgb(133, 210, 238); margin: 0;">
        Hostel Management System
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
        aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
        aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <div class="row-in">
                <div class="col-lg-9">
                  <div class="icon" id="headd" style="width: 10%; display: inline-block;">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-files" viewBox="0 0 16 16">
                      <path
                        d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z" />
                    </svg>
                  </div>
                  <div class="txt" style="width: calc(100%-10%); display: inline-block;">
                    <a href="registration.php">User Registration</a>
                  </div>
                </div>

            </li>
            <li class="nav-item">
              <div class="col-lg-9">
                <div class="icon" style="width: 10%; display: inline-block;">

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path
                      d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                  </svg>
                </div>
                <div class="txt" style="width: calc(100%-10%); display: inline-block;">
                  <a href="index.php">User Login</a>
                </div>
              </div>

            </li>
            <li class="nav-item dropdown">
              <div class="col-lg-9">
                <div class="icon" style="width: 30px; display: inline-block;">

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                  </svg>
                </div>
                <div class="txt" style="width: calc(100%-10px); display: inline-block;">
                  <a href="admin/index.php">Admin Login</a>
                </div>
              </div>

            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="absolute">

<!-- -------------------------Sidebar---------------------------- -->

      <div class="row" >
        <div class="col-sm-4 col-md-3 side-bar bg-dark">
          <div class="row-in">
            <div class="col-lg-9">
              <div class="icon" id="headd" style="width: 10%; display: inline-block;">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files"
                  viewBox="0 0 16 16">
                  <path
                    d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z" />
                </svg>
              </div>
              <div class="txt" style="width: calc(100%-10%); display: inline-block;">
                <a href="registration.php">User Registration</a>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="icon" style="width: 10%; display: inline-block;">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-people-fill" viewBox="0 0 16 16">
                  <path
                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                </svg>
              </div>
              <div class="txt" style="width: calc(100%-10%); display: inline-block;">
                <a href="index.php">User Login</a>
              </div>
            </div>

            <div class="col-lg-9">
              <div class="icon" style="width: 30px; display: inline-block;">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                </svg>
              </div>
              <div class="txt" style="width: calc(100%-10px); display: inline-block;">
                <a href="admin">Admin Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- ------------------------------Registration------------------------------ -->

<div class="outer">
        <h1>
          Student Registration
        </h1><hr>
        </br>

        <div class="box">
            Fill all info
        </div>
        <div class="boxx">
            <form id="myform" name="registration" class="form-horizontal" onSubmit="return valid();">

<div class="row mb-3">
<label class="col-sm-3 control-label">Registration No : </label>
<div class="col-sm-8">
<input type="text" name="regno" id="regno"  class="form-control" required="required"  onBlur="checkRegnoAvailability()">
<span id="user-reg-availability" style="font-size:12px;"></span>
</div>
</div>


<div class="row mb-3">
<label class="col-sm-3 control-label">First Name : </label>
<div class="col-sm-8">
<input type="text" name="fname" id="fname"  class="form-control" required="required" >
</div>
</div>

<div class="row mb-3">
<label class="col-sm-3 control-label">Middle Name : </label>
<div class="col-sm-8">
<input type="text" name="mname" id="mname"  class="form-control">
</div>
</div>

<div class="row mb-3">
<label class="col-sm-3 control-label">Last Name : </label>
<div class="col-sm-8">
<input type="text" name="lname" id="lname"  class="form-control" required="required">
</div>
</div>

<div class="row mb-3">
<label class="col-sm-3 control-label">Gender : </label>
<div class="col-sm-8">
<select name="gender" class="form-control" required="required">
<option value="">Select Gender</option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="others">Others</option>
</select>
</div>
</div>

<div class="row mb-3">
<label class="col-sm-3 control-label">Contact No : </label>
<div class="col-sm-8">
<input type="text" name="contact" id="contact"  class="form-control" required="required" >
</div>
</div>


<div class="row mb-3">
<label class="col-sm-3 control-label">Email id : </label>
<div class="col-sm-8">
<input type="email" name="email" id="email"  class="form-control" onBlur="checkAvailability()" required="required">
<span id="user-availability-status" style="font-size:12px;"></span>
</div>
</div>

<div class="row mb-3">
<label for="inputPassword5" class="col-sm-3 control-label">Password : </label>
<div class="col-sm-8">
<input type="password" name="password" id="confirmPassword" class="form-control" aria-labelledby="passwordHelpBlock">
</div>
</div>

<div class="row mb-3">
<label for="inputPassword5" class="col-sm-3 control-label">Confirm Password : </label>
<div class="col-sm-8">
<input type="password" name="password" id="inputPassword" class="form-control" aria-labelledby="passwordHelpBlock">
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

    <script>
      $("#submit").on("click",function(){
          var Form = $('#myform')[0];
          $.ajax({
            url: "ajax/process-reg.php",
            type: "post",
            data: new FormData(Form),
            contentType:false,
            cache:false,
            processData:false,
            success:function(data){
              if(data=='Exist')
                {
                  toastr.error("Email Id or Reg No. already exist");
                }
              else
                {   
                  toastr.success('Data inserted succsesfully.');
                  console.log(data);
                  $("input").val("");
                }
            }
          });
        });
    </script>

</body>

</html>