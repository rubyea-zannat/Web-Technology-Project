<?php
session_start();

include("../Model/connection.php");

	if (isset($_POST['login'])) {

		$email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
		$pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));
        $type = htmlentities(mysqli_real_escape_string($con, $_POST['type']));
    if(!empty($email)&& !empty($pass)&&!empty($type))
		{
			$select_user = "select * from user where email='$email' AND pass='$pass'";
			$query= mysqli_query($con, $select_user);
			$check_user = mysqli_num_rows($query);

			if($check_user == 1){

				$isset=true;

			if($isset){
                     if($type=="Customer"){
                        $_SESSION['user_email'] = $email;
						 setcookie("user_email",$email, time()+ 3600);
						 echo "<script>window.open('../view/Home.php', '_self')</script>";
                     }
                     elseif($type=="Admin"){
                        $_SESSION['user_email'] = $email;
                        setcookie("user_email",$email, time()+ 3600);
                        echo "<script>window.open('../view/AdminVari.php', '_self')</script>";
                     }
				      
					 }

			}
			else{
				echo"alert('Your Email or Password is incorrect')";
				echo "<script>window.open('../view/Login.php', '_self')</script>";
			}
		}
		else{
			echo"<script>alert('Please fillup all the fields')</script>";
			echo "<script>window.open('../view/Login.php', '_self')</script>";
		}

	}
?>