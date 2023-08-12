<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	<meta name="author" content="">
    
    <title>Admin Login</title>

    <link rel="stylesheet" href="css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>
<body>
       <div class="headd" >
            <div class="container col-md-6 col-md-offset-3">
                <h1 class="text-bold text-light mt-4x">Hostel Management System</h1>
                <div class="boxx col-md-8 col-md-offset-2" >
                    <form id="myform" class="mt">
                        <label for="" class="row user" > <h4 id="usertop"> username or email</h4></label>
                        <input type="text" placeholder="Username" name="username" class="row"><br>
                        <label for="" class="user row"><h4>Password</h4></label>
                        <input type="password" placeholder="Password" name="password" class="row"><br>
                        <input type="button" id="submit" name="login" value="LogIn" class="row">
                    </form>
                </div>
            </div>
        </div>

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
                  window.location.href = "http://localhost/Hostel_Management_System-ajax/admin/dashboard.php";
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