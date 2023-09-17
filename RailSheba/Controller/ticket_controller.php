<?php
        session_start();
        include("../Model/connection.php");
        $user = $_SESSION['user_email'];
		$get_user = "select * from user where email='$user'";
		
		$run_user = mysqli_query($con,$get_user);
		$row = mysqli_fetch_array($run_user);

		$user_id = $row['id'];
    include("../Model/connection.php");
    if(isset($_POST['sub_t'])){
        
        $from = $_POST['fromp'];;
        $to = $_POST['top'];
        $s_class = $_POST['selectclass'];
        $date = $_POST['datee'];
       if(empty($from)||empty($to)||empty($s_class)||empty($date))
       {
         echo "<script>alert('Please fillup all the forms')</script>";
   			 echo "<script>window.open('../View/Home.php', '_self')</script>";
         
       }
       else{
        $insert = "insert into ticket(from_place,to_place,start_date,seat,user_id)
		values('$from','$to','$date','$s_class','$user_id')";

		$query = mysqli_query($con, $insert);

		if($query){
			echo "<script>alert('Well Done you have bought a ticket successfully.')</script>";
			echo "<script>window.open('../View/Home.php', '_self')</script>";
		}
		else{
			echo "<script>alert('Buy failed, please try again!')</script>";
		  echo "<script>window.open('../View/Home.php', '_self')</script>";
		}
       }

    }


?>