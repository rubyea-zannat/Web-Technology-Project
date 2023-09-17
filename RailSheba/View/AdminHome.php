<?php
session_start();
include("../Model/connection.php");
include("../Controller/AdminHeader.php");
if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}

?>
<?php 

 

$select = "SELECT * FROM ticket";
$result = $con->query($select);
?> 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Admin</title> 
	<link rel="stylesheet" type="text/css" href="./css/home_style.css">

</head> 
<body> 
    <center>
        <h1>WELCOME ADMIN</h1>
       <br><br><br>
        <h3><i>Ticket Details</i></h3>
    <div class="container">
		<table class="table">
			<thead class="thead-light">
			<tr>
			  <th scope="col">Starting Station</th>
			  <th scope="col">End Station</th>
			  <th scope="col">Journey Date</th>
              <th scope="col">Seat</th>
			</tr>
			</thead>
			<tbody>
                         
                        <?php   
			// Loop the employee data
				echo '<table class="table table-bordered">';
				while($row = $result->fetch_object()){
					echo '<tr>'
						.'<td>'.$row->from_place.'</td>'
						.'<td>'.$row->to_place.'</td>'
						.'<td>'.$row->start_date.'</td>'
                        .'<td>'.$row->seat.'</td>'
						.'</tr>';
				}
				echo '</table>';
                        ?> 
			</tbody> 
        </table> 
    </div> 
</body> 
</html> 