<!DOCTYPE html>
<?php
session_start();
include("../Model/connection.php");
include("../Controller/CustomerHeader.php");
if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}

?>
<html>
<head>

	<?php
		$user = $_SESSION['user_email'];
		$get_user = "select * from user where email='$user'";
		
		$run_user = mysqli_query($con,$get_user);
		$row = mysqli_fetch_array($run_user);

		$user_name = $row['f_name'];
	?>
	<title><?php echo "$user_name"; ?></title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="./css/home_style2.css">
</head>
<body>
		<center><h2><strong>Welcome <?php echo "$user_name"; ?></strong></h2><br></center>
<div class="row">
	<div id="book_ticket" class="col-sm-12">
		<center>
		<form action="../Controller/ticket_controller.php" method="Post" >
		<div class="form-row hide-inputbtns">
        <label for="from">From</label>
        <input class="from" type="text" placeholder="From" name="fromp" />
       
        </div>
        <div class="form-row hide-inputbtns">
        <label for="from">To</label>
        <input class="To" type="text" placeholder="To" name="top" />
       
        </div>

        <div class="form-row hide-inputbtns">
        <label for="from">Select A Class</label>
        <select class="form-control input-md" name="selectclass">
							<option>Select your Class</option>
							<option>AC</option>
							<option>SNIGDHA</option>
							<option>SEAT</option>
                            <option>CHAIR</option>
                            <option>SHOVAN</option>
                            <option>SHULOV</option>

						</select>
       
        </div>


       
        <div class="form-row hide-inputbtns">
        <label for="birthdate">Start Date</label>
        <input class="birthdate" type="date" name="datee" placeholder="YYYY-MM-DD" data-date-split-input="true" />
       
        </div>

		<button id="btn-post" class="btn btn-success" name="sub_t">Buy Ticket</button>
		</form>
		
		</center>
	</div>
</div>

</body>
<?php
		 include "../Controller/footer.php";
		 ?>
</html>
