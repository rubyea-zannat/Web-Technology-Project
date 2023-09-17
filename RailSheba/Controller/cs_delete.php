<?php

include("../Model/connection.php");

if(isset($_POST["checkbox_value"]))
{
 for($count = 0; $count < count($_POST["checkbox_value"]); $count++)
 {
  $query = "DELETE FROM user WHERE id = '".$_POST['checkbox_value'][$count]."'";
  $statement = $con->prepare($query);
  $statement->execute();
 }
}


?>