<?php
require_once '../utils/db.php';

$name = $_POST['name'];
$roll = $_POST['roll'];
$mobile_number = $_POST['mobile_number'];
$email = $_POST['email'];
$status = $_POST['status'];

$sql = "INSERT INTO tbl_users(name, roll, mobile_number, email, status) VALUES('$name', '$roll', '$mobile_number', '$email', '$status')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: ../Read/index.php?msg=success");
} else {
    echo "Vayena";
}
?>