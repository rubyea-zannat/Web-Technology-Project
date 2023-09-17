
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
					<a class="navbar-brand" href="Home.php">Rail Sheba</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
		
		      
			    <li><a href="Home.php">Home</a></li>
					<li><a href="FareC.php">Fare</a></li>
					<li><a href="EditProfile.php">Edit Profile</a></li>
					<li><a href="Train_Schedule.php">Train Schedule</a></li>
					<li><a href="Profile.php">Profile</a></li>
					<li><a href="Feedback.php">Feedback</a></li>
					
					
					
				
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
