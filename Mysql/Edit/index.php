<?php

require_once ('../utils/db.php');

$id = $_GET['id'];

$query = "SELECT * FROM tbl_users WHERE id = $id";
$result = $conn->query($query);
$user = $result->fetch_assoc();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../model/update.php" method="POST">
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="<?= $user['name'] ?>">
        </div>
        <div>
            <label for="roll">Roll:</label>
            <input type="number" name="roll" id="roll" value="<?= $user['roll'] ?>">
        </div>
        <div>
            <label for="mobile_number">Mobile Number:</label>
            <input type="number" name="mobile_number" id="mobile_number" value="<?= $user['mobile_number'] ?>">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?= $user['email'] ?>">
        </div>
        <div>
            <label for="status">Status:</label>
            <select name="status" id="status">
                <option value="1" <?php if($user['status'] == 1) { echo "selected"; } ?>>Absent</option>
                <option value="2" <?php if($user['status'] == 2) { echo "selected"; } ?>>Present</option>
            </select>
        </div>
        <div>
            <input type="hidden" name="id" value="<?= $user['id'] ?>">
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>

