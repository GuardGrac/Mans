<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("localhost", "root", "", "Alpha-db");
if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($con, "utf8");
return $con;
?>