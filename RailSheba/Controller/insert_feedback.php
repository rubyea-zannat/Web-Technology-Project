<?php
include("../Model/connection.php");

	if(isset($_POST['sign_up'])){

		$first_name = htmlentities(mysqli_real_escape_string($con,$_POST['fname']));
		


	
		
	

		if(!empty($first_name))
		{
			
			$insert = "insert into feedback (feedback_de)
                values('$first_name')";

		$query = mysqli_query($con, $insert);

		if($query){
			echo "<script>alert('FeedBack Added.')</script>";
			echo "<script>window.open('../view/FeedBack.php', '_self')</script>";
		}
		else{
			echo "<script>alert('Feedback failed, please try again!')</script>";
            echo "<script>window.open('../view/FeedBack.php', '_self')</script>";
		}

		}
		else{
			echo "<script>alert('Please fill all the fields!')</script>";
			echo "<script>window.open('../view/FeedBack.php', '_self')</script>";
		}

                
	}
?>
