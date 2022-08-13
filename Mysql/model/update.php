<?php
require_once ("../utils/db.php");

$id = $_POST['id'];
$name = $_POST['name'];
$roll = $_POST['roll'];
$mobile_number = $_POST['mobile_number'];
$email = $_POST['email'];
$status = $_POST['status'];

$sql = "UPDATE tbl_users SET name='$name', roll='$roll', mobile_number='$mobile_number', email='$email', status='$status' WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    header("Location: ../Read/index.php?msg=success");
} else {
    echo "Vayena";
}


?>