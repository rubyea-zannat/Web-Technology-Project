<?php

$student_id = $_POST["id"];
$firstName = $_POST["first_name"];
$lastName = $_POST["last_name"];

$conn = mysqli_connect("localhost","root","","railsheba") or die("Connection Failed");

$sql = "UPDATE station SET s_name = '{$firstName}', s_details = '{$lastName}' WHERE s_id = {$student_id}";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}

?>
