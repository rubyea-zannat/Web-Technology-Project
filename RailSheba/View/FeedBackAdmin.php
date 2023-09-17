<?php
session_start();
include("../Model/connection.php");
include("../Controller/AdminHeader.php");
if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}

?>
<?php 

 

$select = "SELECT * FROM feedback";
$result = $con->query($select);
?> 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>FeedBack</title> 
	<link rel="stylesheet" type="text/css" href="./css/home_style.css">

</head> 
<body> 
    <center>
        <h1>FeedBack</h1>
       <br><br><br>
       
    <div class="container">
		<table class="table">
			<thead class="thead-light">
			<tr>
			  <th scope="col">FeedBack ID</th>
			  <th scope="col">FeedBack</th>
			 
			</tr>
			</thead>
			<tbody>
                         
                        <?php   
			
				echo '<table class="table table-bordered">';
				while($row = $result->fetch_object()){
					echo '<tr>'
						.'<td>'.$row->f_id.'</td>'
						.'<td>'.$row->feedback_de.'</td>'
						
						.'</tr>';
				}
				echo '</table>';
                        ?> 
			</tbody> 
        </table> 
    </div> 
</body> 
</html> 