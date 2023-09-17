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

	<title>Edit Your Personal Information</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/home_style2.css">
</head>
<style>
.error{
	color: red;
}
</style>
<body>
<div class="row">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8">
  	<form name="updateForm" onsubmit="return validateForm()" action="" method="post" enctype="multipart/form-data">
      <table class="table table-bordered table-hover">
    		<tr align="center">
    			<td colspan="6" class="active"><h2>Edit Your Profile</h2></td>
    		</tr>
    		<tr>
    			<td style="font-weight: bold;">Change Your Firstname</td>
    			<td>
    				<input class="form-control" id="f_name" type="text" name="f_name" value="<?php echo $first_name; ?>">
  					<div class="error" id="fnameErr"></div>
    			</td>
    		</tr>
    			<tr>
    			<td style="font-weight: bold;">Change Your Lastname</td>
    			<td>
    				<input class="form-control" type="text" name="l_name" value="<?php echo $last_name; ?>">
  					<div class="error" id="lnameErr"></div>
    			</td>
    		</tr>
    		<tr>
    			<td style="font-weight: bold;">Change Password</td>
    			<td>
    				<input  class="form-control" type="password" name="u_pass" id="mypass" value="<?php echo $user_pass; ?>">
  						<div class="error" id="passwordErr"></div>
    			</td>
    		</tr>
    		<tr>
    			<td style="font-weight: bold;">Email</td>
    			 <td>
    				<input class="form-control" type="text" name="u_email"  value="<?php echo $user_email; ?>">
  						<div class="error" id="emailErr"></div>
    			</td>
    		</tr>
            <tr>
    			<td style="font-weight: bold;">Mobile</td>
    			 <td>
    				<input class="form-control" type="number" name="u_mobile"  value="<?php echo $user_mobile; ?>">
  						<div class="error" id="phoneErr"></div>
    			</td>
    		</tr>
            <tr>
    			<td style="font-weight: bold;">Address</td>
    			 <td>
    				<input class="form-control" type="text" name="u_address"  value="<?php echo $user_address; ?>">
  						<div class="error" id="AddErr"></div>
    			</td>
    		</tr>
  		<tr align="center">
  			<td colspan="6">
  				<input type="submit" class="btn btn-info" name="update" style="width:250px;" value="Update">
                  <?php include("../Controller/update.php"); ?>
  			</td>
  		</tr>
  	</table>
  </form>
  </div>
  <div class="col-sm-2">
  </div>
</div>
<?php
		 include "../Controller/footer.php";
		 ?>
</body>
</html>
