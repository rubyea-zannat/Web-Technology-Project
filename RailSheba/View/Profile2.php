<!DOCTYPE html>
<?php
error_reporting(0);
session_start();
include("../Model/connection.php");
include("../Controller/AdminHeader.php");
if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}

?>
<html>
<head>
	<?php
		$user = $_SESSION['user_email'];
		$get_user = "select * from user where email='$user'";
		$run_user = mysqli_query($con,$get_user);
		$row = mysqli_fetch_array($run_user);
        $user_id = $row['id'];
		$user_name = $row['f_name'];
        $user_image = $row['profile'];
        $first_name = $row['f_name'];
        $last_name = $row['l_name'];
        $user_country = $row['address'];
        
        $user_gender=$row['post_code'];
        $user_number=$row['mobile'];
	?>
	<title><?php echo "$user_name"; ?></title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<style>
	#cover-img{
		height: 400px;
		width: 100%;
	}#profile-img{
		position: absolute;
		top: 160px;
		left: 40px;
	}
	#update_profile{
		position: relative;
		top: -33px;
		cursor: pointer;
		left: 93px;
		border-radius: 4px;
		background-color: rgba(0,0,0,0.1);
		transform: translate(-50%, -50%);
	}
	#button_profile{
		position: absolute;
		top: 82%;
		left: 50%;
		cursor: pointer;
		transform: translate(-50%, -50%);
	}
	#own_posts{
		border: 5px solid #5ED6E7 ;

		border-radius: 5px;
		padding: 40px 50px ;

	}
	#post_img{
		height: 300px;
		width: 100%;
	}
</style>
<body>
<div class="row">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-8">
		<?php
			echo"
		
			<div id='profile-img'>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
				<img src='image/$user_image' alt='Profile' class='img-circle' width='180px' height='185px'>
				<form action='Profile2.php?u_id='$user_id' method='post' enctype='multipart/form-data'>

				<label id='update_profile'> Select Profile
				<input type='file' name='u_image' size='60' />
				</label><br><br>
				<button id='button_profile' name='update' class='btn btn-info'>Update Profile</button>
				</form>
			</div><br>
			";
		?>
		
	</div>


	<?php
		if(isset($_POST['update'])){

				$u_image = $_FILES['u_image']['name'];
				$image_tmp = $_FILES['u_image']['tmp_name'];
				$random_number = rand(1,100);

				if($u_image==''){
					echo "<script>alert('Please Select Profile Image on clicking on your profile image')</script>";
					echo "<script>window.open('Profile2.php?u_id=$user_id' , '_self')</script>";
					exit();
				}else{
					move_uploaded_file($image_tmp, "image/$u_image.$random_number");
					$update = "update user set profile='$u_image.$random_number' where id='$user_id'";

					$run = mysqli_query($con, $update);

					if($run){
					echo "<script>alert('Your Profile Updated')</script>";
					echo "<script>window.open('Profile2.php?u_id=$user_id' , '_self')</script>";
					}
				}

			}
	?>
	<br><br><br><div class="col-sm-2">
	</div>
</div>
<div class="row">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-2" style="background-color: #61B39E;text-align: center;left: 0.7%;border-radius: 5px;">
		<?php
		echo"
			<center><h2><strong>About</strong></h2></center>
			<center><h4><strong>$first_name $last_name</strong></h4></center>
			<p><strong>Address: </strong> $user_country</p><br>
			<p><strong>Post Code: </strong> $user_gender</p><br>
            <p><strong>Phone Number: </strong> $user_number</p><br>
			
		";
		?>
	</div>
	<div class="col-sm-6">
		<?php
         global $con;
         if (isset($_GET['u_id'])) {

         	$u_id= $_GET['u_id'];

         	// code...
         }

            	global $con;


            	if (isset($_GET['u_id'])) {
            		$u_id= $_GET['u_id'];
            		// code...
            	}
            	$get_posts="select user_email from user where id='u_id'";
            	$run_user = mysqli_query($con,$get_posts);
            	$row = mysqli_fetch_array($run_user);

            	$user_email = $row['email'];

            	$user = $_SESSION['user_email'];

            	$get_user="select * from user where email='$user'";

            	$run_users= mysqli_query($con,$get_user);
            	$row = mysqli_fetch_array($run_users);

            	$user_id = $row['id'];
            	$u_email = $row['email'];

            	if($u_email == $user_email){
            		echo"<script>window.open('Profile2.php?u_id=$user_id','_self')</script>";
            	}
            	else{
            	}

		 ?>
	</div>
	<div class="col-sm-2">

	</div>
</div>
</body><br><br>

</html>
