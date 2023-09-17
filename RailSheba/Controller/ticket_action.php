<?php
include("../Model/connection.php");

	if(isset($_POST['sub_t'])){

		$from = htmlentities(mysqli_real_escape_string($con,$_POST['fromp']));
		$to = htmlentities(mysqli_real_escape_string($con,$_POST['top']));
		$date = htmlentities(mysqli_real_escape_string($con,$_POST['datee']));
		$class = htmlentities(mysqli_real_escape_string($con,$_POST['selectclass']));
		
        if(!empty($from)&&!empty($to)&&!empty($date)&&!empty($class)){
            $insert = "insert into ticket (from_place,to_place,user_name,Relationship,user_pass,user_email,user_counrey,user_gender,user_birthday,user_image,user_cover,user_reg_date,posts,recovery_account)
            values('$first_name','$last_name','$username','...','$pass','$email','$country','$gender','$birthday','$profile_pic','default_cover.jpg',NOW(),'$posts','Type Best Friend Name.')";
    
            $query = mysqli_query($con, $insert);
            if($query){
                echo "<script>alert('Well Done $first_name, you are good to go.')</script>";
                echo "<script>window.open('../View/add_admin.php', '_self')</script>";
            }
            else{
                echo "<script>alert('Registration failed, please try again!')</script>";
              echo "<script>window.open('../View/add_admin.php', '_self')</script>";
            }
    
        }
        else{
            echo "<script>alert('Please Fill All the Fields!')</script>";
          echo "<script>window.open('../View/Home.php', '_self')</script>";
        }
        

		
		
	}
?>
