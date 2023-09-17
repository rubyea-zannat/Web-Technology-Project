<?php

if(count($_SESSION)===0){
  header("Location: logout.php");
}
 ?>
<?php
include("../Model/connection.php");

?>

		<?php
		$user = $_SESSION['user_email'];
		$get_user = "select * from user where email='$user'";
		$run_user = mysqli_query($con,$get_user);
		$row=mysqli_fetch_array($run_user);

		$user_id = $row['id'];
		$first_name = $row['f_name'];
		$last_name = $row['l_name'];
	
		$user_pass = $row['pass'];
		$user_email = $row['email'];
		$user_address = $row['address'];
		$user_mobile = $row['mobile'];
		$user_image = $row['profile'];

		?> 
<style>
	body {
  color: white;
}
.a{
    color: white;
}
	nav.navbar-default {

	  top: 0;
	  background-color:  #00b8e6;
	  padding: 15px;
	  font-size: 20px;
      
		color: black;
		border-radius: 30px;
	}
	
	</style>
	<body>
		<nav class="navbar navbar-default">
			<div id="re"class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					
					</button>
                    
					<lable>RailSheba Admin</lable>
				</div>
       
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<center> 
			  <ul class="nav navbar-nav">
		
			     <li><a href="AdminHome.php">Home</a></li>
				 <li><a href="EditStation.php">Add Station & Schedule</a></li>
				<li><a href="ViewCustomer.php">Manage Users</a></li>
				<li><a href="Profile2.php">Profile</a></li>
				<li><a href="EditProfile2.php">Edit Profile</a></li>
				<li><a href="FeedBackAdmin.php">See FeedBack</a></li>
				<li><a href="Addnew.php">Add New Employee</a></li>
					
				</ul>
				
</center>
<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<form class="navbar-form navbar-left" method="get" action="logout.php">
							<div class="form-group">

							</div>
							<button type="submit" style="width:80px;color:black;background-color:white;" class="btn btn-info" name="search">Logout </button>
						</form>
					</li>
				</ul>
	
		</div>
		</div>
	</nav>
  
	
