<!DOCTYPE html>
<?php
session_start();
include("../Model/connection.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}

?>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="./css/home_style2.css">
</head>
<body>
		<center><h2><strong>Please Enter Your Admin Code </strong></h2><br></center>
<div class="row">
	<div id="book_ticket" class="col-sm-12">
		<center>
		<form action="../Controller/AdminV.php" method="Post" >
		<div class="form-row hide-inputbtns">
        <label for="from">Code</label>
        <input class="from" type="text" placeholder="Varification Code" name="vari" />
       
        </div>
        
		<button id="btn-post" class="btn btn-success" name="sub_t">Varify</button>
		</form>
        <form action="Login.php" method="Post" >
		<button id="btn-post" class="btn btn-success" name="sub_t">Back</button>
		</form>
		
		</center>
	</div>
</div>

</body>
<?php
		 include "../Controller/footer.php";
		 ?>
</html>
