<?php
$servername = "shareddb-f.hosting.stackcp.net";
$username = "Radoq";
$password = "feniks92";
$database = "employeemanagment-323423b6";
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  
mysqli_close($conn);
?>