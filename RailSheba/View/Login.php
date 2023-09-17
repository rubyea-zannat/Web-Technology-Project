<?php 
include("../Controller/loginheader.php");
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

    
	<title>Login</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
  <body>
<br><br>

   `<form name="signinForm" onsubmit="return validateForm()" action="" method="POST">
      <div class="row">
   <div class="col-sm-12">
      <div class="main-content">
         <div class="header">
            <h2 style="text-align: center;"><strong>Login</strong></h2>
         </div>
         <div class="l-part">
            <form action="" method="post">
               <input type="text" name="email" placeholder="Email"class="form-control input-md">
               <div class="error" id="emailErr"></div><br>
               <div class="overlap-text">
                  <input type="password" name="pass" placeholder="Password" class="form-control input-md">
                  <div class="error" id="passwordErr"></div><br>
                  <a style="text-decoration:none;float: right;color: #187FAB;" data-toggle="tooltip" title="Reset Password" href="forgetpass.php">Forgot?</a>
               </div>
               <div class="input-group">
						<span class="input-group-addon"></span>
						<select class="form-control input-md" name="type">
							<option>Select your Type</option>
							<option>Admin</option>
							<option>Customer</option>
							
						</select>
					</div>
           <br><br>
               <center><button id="signin"  class="button" name="login">Login</button></center>
          <?php include("../controller/LoginControl.php"); ?>
            </form><br><br>
          
            
         </div>
      </div>
   </div>
</div>

</form><br><br><br>
<script src="./js/script.js"></script>
  </body>
	<?php
 include "../controller/footer.php";
 ?>
</html>
