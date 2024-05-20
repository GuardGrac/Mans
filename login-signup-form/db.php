<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("localhost", "root", "", "Alpha-db");
$pdo = new PDO('mysql:host=localhost;dbname=Alpha-db', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($con, "utf8");
return $con;
?>