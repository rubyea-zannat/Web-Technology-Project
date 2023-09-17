<?php 
include("../Controller/loginheader.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="./css/signup.css">
</head>

<body>
<div class="row">

</div>
<div class="row">
	<div class="col-sm-12">
		<div class="main-content">
			<div class="header">
				<h3 style="text-align: center;"><strong>Register To The System</strong></h3>
				<hr>
			</div>
			<div class="l-part">
				<form name="signupForm" onsubmit="return validateForm()" action="" method="POST" >
					<div class="input-group">
						<span class="input-group-addon"></span>
						<input type="text" class="form-control" placeholder="First Name" name="fname">

					</div>
					<div class="error" id="fnameErr"></div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"></span>
						<input type="text" class="form-control" placeholder="Last Name" name="lname">
					</div>
					<div class="error" id="lnameErr"></div><br>
                    <div class="input-group">
						<span class="input-group-addon"></span>
						<input  type="email" class="form-control" placeholder="Email" name="email" >
					</div>
					<div class="error" id="emailErr"></div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"></span>
						<input type="text" class="form-control" placeholder="Post Code" name="P_Code">
					</div>
					<div class="error" id="PErr"></div>
					<br>
                    <div class="input-group">
						<span class="input-group-addon"></span>
						<input  type="mobile" class="form-control" placeholder="mobile Number" name="phone" >
					</div>
					<div class="error" id="phoneErr"></div>
					<br>
                    <div class="input-group">
						<span class="input-group-addon"></span>
						<input  type="text" class="form-control" placeholder="Address" name="Address" >
					</div>
					<div class="error" id="addErr"></div>
					<br>
					
					<div class="input-group">
						<span class="input-group-addon"></span>
						<input  type="password" class="form-control" placeholder="Password" name="password">
					</div>

					<div class="error" id="passwordErr"></div>
					
		
					<br>
					<center><button id="signup" class="button" name="sign_up">Signup</button></center>

					<?php require("../Controller/insert.php"); ?>

					
				</form><br><br>
			</div>
		</div>
	</div>
</div>

</body>
<?php
		 include "../Controller/Footer.php";
		 ?>
</html>
