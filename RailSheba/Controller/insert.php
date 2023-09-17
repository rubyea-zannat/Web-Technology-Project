<?php
include("../Model/connection.php");

	if(isset($_POST['sign_up'])){

		$first_name = htmlentities(mysqli_real_escape_string($con,$_POST['fname']));
		$last_name = htmlentities(mysqli_real_escape_string($con,$_POST['lname']));
		
		$email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
        $P_code = htmlentities(mysqli_real_escape_string($con,$_POST['P_Code']));
        $mobile = htmlentities(mysqli_real_escape_string($con,$_POST['phone']));
        $address = htmlentities(mysqli_real_escape_string($con,$_POST['Address']));
		$pass = htmlentities(mysqli_real_escape_string($con,$_POST['password']));


		

		

		$check_email = "select * from user where email='$email'";
		$run_email = mysqli_query($con,$check_email);

		$check = mysqli_num_rows($run_email);

		if($check == 1){
			echo "<script>alert('Email already exist, Please try using another email')</script>";
			echo "<script>window.open('../View/Register.php', '_self')</script>";
			exit();
		}

		
		$profile_pic ="default.jpg";

		if(!empty($first_name)&&!empty($last_name)&&!empty($email)&&!empty($P_code)&&!empty($mobile)&&!empty($address)&&!empty($pass))
		{
			if(strlen($pass) <9 ){
				echo"<script>alert('Password should be minimum 9 characters!')</script>";
				exit();
			}
			$insert = "insert into user (f_name,l_name,email,post_code,mobile,address,pass,profile)
                values('$first_name','$last_name','$email','$P_code','$mobile','$address','$pass','$profile_pic')";

		$query = mysqli_query($con, $insert);

		if($query){
			echo "<script>alert('Well Done $first_name, you are good to go.')</script>";
			echo "<script>window.open('../view/Register.php', '_self')</script>";
		}
		else{
			echo "<script>alert('Registration failed, please try again!')</script>";
		  echo "<script>window.open('../view/Register.php', '_self')</script>";
		}

		}
		else{
			echo "<script>alert('Please fill all the fields!')</script>";
			echo "<script>window.open('../view/Register.php', '_self')</script>";
		}

                
	}
?>
