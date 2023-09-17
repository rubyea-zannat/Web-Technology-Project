<?php
include("../Model/connection.php");

	if(isset($_POST['sign_up'])){

		$first_name = htmlentities(mysqli_real_escape_string($con,$_POST['fname']));
		$last_name = htmlentities(mysqli_real_escape_string($con,$_POST['lname']));
		$pass = htmlentities(mysqli_real_escape_string($con,$_POST['password']));
		$email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
		$country = htmlentities(mysqli_real_escape_string($con,$_POST['country']));
		$gender = htmlentities(mysqli_real_escape_string($con,$_POST['gender']));
		$birthday = htmlentities(mysqli_real_escape_string($con,$_POST['u_birthday']));
	


		$insert = "insert into employee (f_name,l_name,mail,password,gender,birthday,country)
		values('$first_name','$last_name','$email','$pass','$gender','$birthday','$country')";

		$query = mysqli_query($con, $insert);

		if($query){
			echo "<script>alert('Successfuly Added.')</script>";
			echo "<script>window.open('../View/Addnew.php', '_self')</script>";
		}
		else{
			echo "<script>alert('Sorry !! Employee Registration failed, please try again!')</script>";
		  echo "<script>window.open('../View/Addnew.php', '_self')</script>";
		}
	}
?>
