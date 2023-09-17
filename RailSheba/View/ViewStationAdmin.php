

<?php
session_start();
include("../Model/connection.php");
include("../Controller/AdminHeader.php");
if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}

?>
    

<!-- HTML -->
<html>

<head>
    <title>View Fare</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Header File -->

    <style>
        table{
          border-collapse: collapse;
          width: 100%; 
        }
       th,td,tr table{
          border : 2px solid black; 
          padding: 5px; 
        }

        th{
            background-color: lightblue;
            color: black;
            height: 30px;
        }
       a{
        text-decoration: none;
       }
       a:hover{
        color: brown;
       }


    </style>
</head>

<body>
    <table>
        <tr>
            <td style="padding: 80px">
                <form method="post" action="" enctype="multipart/form-data">

                    <fieldset>
                        <legend>Station Details</legend>
                        <table>
                           <table>
                            
						   <tr>
						   <th>
							<center>  Station ID  </center><br>
							</th>
							<th>
							<center>  City  </center><br>
							</th>
                            <th>
							<center>  Address  </center><br>
							</th>
                            <th> 
								<center> Hotline Number </center><br>
                            </th>

                            <th colspan = "2 " > 
                            <button><a href="addStationAdmin.php">ADD STATIONS</a></button>
                            </tr>

                            <?php
                            
                            $con = getConnection();
                            $sql = "SELECT * FROM stations";
                            $result = mysqli_query($con, $sql);

                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";

                                    echo "<td><center>{$row['station_id']}</center></td>";
                                    echo "<td><center>{$row['city']}</center></td>";
                                    echo "<td><center>{$row['address']}</center></td>";
                                    echo "<td><center>{$row['hotline_number']}</center></td>";
                                    
                                    //echo "<td><center><a href=\"editStationAdmin.php\">Edit</a></center></td>";
                                    //EDIT
                                    ?>

                                    <td><center><a href="editStation.php?update=<?php echo $row['station_id']; ?>">Edit</a></center></td><?php

                                    //DELETE
                                    ?>
                                    
                                    <td><center><a href="viewStationAdmin.php?delete=<?php echo $row['station_id']; ?>">Delete</a></center></td><?php

                                    echo "</tr>";
                                }
                            } else {
                                echo "<td colspan=\"6\">No data found</td>";
                            }
                            ?>

                        </table>      
    </fieldset>
    </form>
    </td>
    </tr>
    </table>

</body>

</html>

<?php


  if(isset($_GET['delete'])) {
    $station_id = $_GET['delete'];
    $sql = "DELETE FROM stations WHERE station_id = $station_id";
    $result = mysqli_query($con, $sql);

    if($result) {
      //echo "<h2>Record deleted successfully</h2>";
      //alert('Record deleted successfully');
      header('location: viewStationAdmin.php');
    } else {
      echo "<h2>Error deleting record: </h2>" . mysqli_error($con);
    }

    mysqli_close($con);
  }
  /*
    if(isset($_GET['update'])) {
    $station_id = $_GET['update'];
    $sql = "UPDATE `stations` SET('city', 'address', 'hotline_number')";
    $result = mysqli_query($con, $sql);

    if($result) {
        header('location: editStation.php');
    } else {
        echo "<h2>Error deleting record: </h2>" . mysqli_error($con);
    }
}
*/
?>