<?php
$conn = mysqli_connect("localhost", "root", "", "sparks bank");

if (!$conn) {
  die("Could not connect to the database due to the following error --> " . mysqli_connect_error());
}



?>
