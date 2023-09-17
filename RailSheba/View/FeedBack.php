<!DOCTYPE html>
<?php
session_start();
include("../Model/connection.php");
include("../Controller/CustomerHeader.php");
if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add a Feedback</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		overflow-x: hidden;
	}
	.main-content{
		width: 50%;
		height: 40%;
		margin: 10px auto;
		background-color: #fff;
		border: 2px solid #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}
	.well{
		background-color: #18ab9a;
	}
	#signup{
		width: 60%;
		border-radius: 30px;
	}
	.error{
		color: red;
	}

</style>
<body>
<div class="row">

</div>
<div class="row">
	<div class="col-sm-12">
		<div class="main-content">
		
			<div class="l-part">
				<form name="signupForm" onsubmit="return validateForm()" action="" method="POST" >
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						
                        <textarea 
                          class="form-control"
      	                  id="text" 
      	                  cols="40" 
      	                   rows="4" 
      	                   name="fname" 
      	                   placeholder="Attach a Report..."></textarea>

					</div>
					<div class="error" id="fnameErr"></div>
					<br>
					<center><button id="signup" class="btn btn-info btn-lg" name="sign_up">Submit</button></center>
         	<?php include("../Controller/insert_feedback.php"); ?>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="./js/vali.js"></script>
</body>
<?php
		 include "../Controller/footer.php";
		 ?>
</html>
