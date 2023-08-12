<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hostel Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css1/index.css">
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
                <a href="admin">Admin Login</a>
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

<!-- ------------------------------Login------------------------------ -->

        <div class="outer">
        <h1>User Login</h1><hr>
        <form class="row g-3" id="myform">
          <div class="cont">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email / Registation Number</label>
              <input type="email" class="form-control" name="emailreg" id="exampleFormControlInput1" placeholder="Email / Registation Number">
            </div>
            <label for="inputPassword5" class="form-label">Password</label>
            <input type="password" name="password" id="inputPassword5" class="form-control" aria-labelledby="passwordHelpBlock">
            <div class="col-auto" id="btn-login">
              <input type="button" id="submit" name="submit" Value="Login" class="btn btn-primary mb-3">
            </div>
            <div id="passwordHelpBlock" class="form-text forgot">
              <a href="forgot-password.php" style="color:black; font-size: 20px;">Forgot Password?</a>
            </div>
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
          $("#submit").val('Please Wait...');
          var Form = $('#myform')[0];
          $.ajax({
            url: "ajax/process-index.php",
            type: "post",
            data: new FormData(Form),
            contentType:false,
            cache:false,
            processData:false,
            success:function(data){
              $("#submit").val('Login');
              if(data=='Success')
                {
                  toastr.success('Login succsesfully.');
                  window.location.href = "http://localhost/Hostel_Management_System/dashboard.php";
                  console.log(data);
                  $("input").val("");
                }
              else
                { 
                  toastr.error("Email Id or password is not correct.");  
                }
            }
          });
        });
    </script>

</body>

</html>