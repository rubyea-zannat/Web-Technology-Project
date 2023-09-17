<?php
//action.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "railsheba");
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM user ORDER BY id DESC";
  $result = mysqli_query($connect, $query);
  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
    <th width="10%">ID</th>
     <th width="10%">First Name</th>
     <th width="10%">Last Name</th>
     <th width="10%">Address</th>
     <th width="10%">Phone Number</th>
     <th width="10%">Remove</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
    <td>'.$row["id"].'</td>
     <td>'.$row["f_name"].'</td>
     <td>'.$row["l_name"].'</td>
     <td>'.$row["address"].'</td>
     <td>'.$row["mobile"].'</td>
    
    
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["id"].'">Remove</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }
 if($_POST["action"] == "delete")
 {
  $query = "DELETE FROM user WHERE id = '".$_POST["id"]."'";
  if(mysqli_query($connect, $query))
  {
   echo ' Deleted from Database';
  }
 }
}
?>

