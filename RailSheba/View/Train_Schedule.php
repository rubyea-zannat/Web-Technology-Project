
<?php
session_start();
include("../Model/connection.php");
include("../Controller/CustomerHeader.php");
if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}

?>
<?php 

 

$select = "SELECT * FROM station";
$result = $con->query($select);
?> 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Train Schedule</title> 
	<link rel="stylesheet" type="text/css" href="./css/home_style.css">

</head> 
<body> 
    <center>
       
        <h3><i>New Station And Schedule</i></h3><br><br><br>
    <div class="container">
		<table class="table">
			<thead class="thead-light">
			<tr>
			  <th scope="col">Station Name</th>
			  <th scope="col">Schedule</th>
			 
			</tr>
			</thead>
			<tbody>
                         
                        <?php   
			// Loop the employee data
				echo '<table class="table table-bordered">';
				while($row = $result->fetch_object()){
					echo '<tr>'
						.'<td>'.$row->s_name.'</td>'
						.'<td>'.$row->s_details.'</td>'
						
						.'</tr>';
				}
				echo '</table>';
                        ?> 
			</tbody> 
        </table> 
    </div> 
</body> 
</html> 