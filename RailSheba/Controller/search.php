<?php

$search_value = $_POST["search"];

$conn = mysqli_connect("localhost","root","","railsheba") or die("Connection Failed");

$sql = "SELECT * FROM station WHERE s_name LIKE '%{$search_value}%' ";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
              <tr>
              <th width="60px">StationID</th>
                <th width="60px">Station Name</th>
                <th>Schedule</th>
                <th width="90px">Edit</th>
                <th width="90px">Delete</th>
              </tr>';

              while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr><td align='center'>{$row["s_id"]}</td><td>{$row["s_name"]}</td><td> {$row["s_details"]}</td><td align='center'><button class='edit-btn' data-eid='{$row["s_id"]}'>Edit</button></td><td align='center'><button Class='delete-btn' data-id='{$row["s_id"]}'>Delete</button></td></tr>";
              }
    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}

?>
