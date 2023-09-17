<!DOCTYPE html>
<?php
error_reporting(0);
session_start();
include("../Model/connection.php");
include("../Controller/CustomerHeader.php");
if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}

?>
<?php
		$user = $_SESSION['user_email'];
		$get_user = "select * from user where email='$user'";
		
		$run_user = mysqli_query($con,$get_user);
		$row = mysqli_fetch_array($run_user);

		$user_id = $row['id'];
	?>
<html>
<head>
<title>Fare</title>
<meta content="noindex, nofollow" name="robots">
<link href="./css/style1.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Your Ticket</h2>
</div>
<div class="divB">
<div class="divD">
<p>Train Ticket</p>
</div>
</div>

<?php

$get_user2 = "select * from ticket where user_id='$user_id'";

$run_user2 = mysqli_query($con,$get_user2);
$row2 = mysqli_fetch_array($run_user2);
?>
<div class="form">
<h2>---Details---</h2>

<span>From :</span> <?php echo $row2['from_place']; ?><br>
<lable><b>To :</b></lable> <?php echo $row2['to_place']; ?><br>
<span>Start Date:</span> <?php echo $row2['start_date']; ?><br>
<span>Seat :</span> <?php echo $row2['seat']; ?><br>
<span>Price :</span> <label>650 Taka</label>
</div>


</body>
</html>
