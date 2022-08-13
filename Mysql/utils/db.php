<!-- Mysql connection with database -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "institute";

$conn = new mysqli($servername, $username, $password, $databasename);  // Create connection oop style

if($conn->connect_error) {
    die("Connection Failed");
}

?>



