<?php
 require_once '../utils/db.php';

 $sql = "SELECT * FROM tbl_users";
    $result = $conn->query($sql);
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
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Roll no</th>
            <th>Mobile Number</th>
            <th>Email</th>
            <th>Status</th>
        
        </tr>
        <?php
        while($user = $result->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>".$user['name']."</td>";
            echo "<td>".$user['roll']."</td>";
            echo "<td>".$user['mobile_number']."</td>";
            echo "<td>".$user['email']."</td>";
            echo "<td>".$user['status']."</td>";
            ?>
        <td><a href="<?= '../Edit/index.php?id='.$user['id'] ?>">Edit</a>
        <td><a href="<?= '../Delete/index.php?id='.$user['id'] ?>">Delete</a>
        
    </td>
            <?php
            echo "</tr>";
        }
        ?>
     
     

    </table>
    
</body>
</html>