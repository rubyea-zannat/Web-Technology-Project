<?php
error_reporting(0);
session_start();
include("../Model/connection.php");
include("../Controller/AdminHeader.php");
if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}

?>
<!DOCTYPE html>  
<html>  
 <head>  
  <title>Manage Users</title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 </head>  
 <body>  
  <br /><br />  
  <div class="container" style="width:900px;">  
   <h3 align="center">Manage Users</h3>  
   <br />
   <div align="right">
 
   </div>
   <br />
   <div id="image_data">

   </div>
  </div>  
 </body>  
</html>


 
<script>  
$(document).ready(function(){
 
 fetch_data();

 function fetch_data()
 {
  var action = "fetch";
  $.ajax({
   url:"../Controller/action.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('#image_data').html(data);
   }
  })
 }



 $(document).on('click', '.delete', function(){
  var id = $(this).attr("id");
  var action = "delete";
  if(confirm("Are you sure you want to remove this  from database?"))
  {
   $.ajax({
    url:"../Controller/action.php",
    method:"POST",
    data:{id:id, action:action},
    success:function(data)
    {
     alert(data);
     fetch_data();
    }
   })
  }
  else
  {
   return false;
  }
 });
});  
</script>