<?php
include("../Model/connection.php");

if (isset($_POST['update'])) {
	$f_name = htmlentities($_POST['f_name']);
	$l_name = htmlentities($_POST['l_name']);
	$u_pass = htmlentities($_POST['u_pass']);
	$u_email = htmlentities($_POST['u_email']);
     $u_mobile = htmlentities($_POST['u_mobile']);
	$u_address = htmlentities($_POST['u_address']);
	
  if ($f_name == '') {
     echo "<script>alert('Please enter valid firstname')</script>";
     echo "<script>window.open('EditProfile2.php?u_id$user_id','_self')</script>";

     exit();
     // code...
   }
    elseif ($l_name=='') {
         echo "<script>alert('Please enter valid lastname')</script>";
         echo "<script>window.open('EditProfile2.php?u_id$user_id','_self')</script>";

         exit();
    }
    elseif ($u_pass=='') {
         echo "<script>alert('Please enter valid password')</script>";
         echo "<script>window.open('EditProfile2.php?u_id$user_id','_self')</script>";

         exit();     // code...
    }
    elseif ($u_email=='') {
         echo "<script>alert('Please enter valid  email')</script>";
         echo "<script>window.open('EditProfile2.php?u_id$user_id','_self')</script>";

         exit();
    }
    elseif ($u_mobile=='') {
         echo "<script>alert('Please enter valid mobile number')</script>";
         echo "<script>window.open('EditProfile2.php?u_id$user_id','_self')</script>";

         exit();     // code...
    }
    elseif ($u_address=='') {
     echo "<script>alert('Please enter valid mobile number')</script>";
     echo "<script>window.open('EditProfile2.php?u_id$user_id','_self')</script>";

     exit();     // code...
}
   else {
     $update = "update user set f_name='$f_name',l_name='$l_name',email='$u_email',mobile='$u_mobile',address='$u_address',pass='$u_pass' ";
     $run= mysqli_query($con,$update);
      if ($run) {
        echo "<script>alert('Updating......')</script>";
        echo "<script>window.open('EditProfile2.php','_self')</script>";
        // code...
      }
   }

}
	// code...


 ?>
