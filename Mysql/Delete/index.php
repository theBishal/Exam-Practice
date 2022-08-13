
<?php
require_once ("../utils/db.php");


$id = $_GET['id'];

$query = "DELETE FROM tbl_users WHERE id = $id";
if($conn->query($query) == TRUE)
{
    header("Location: ../Read/index.php?msg=success");
}
else
{
    echo "Error deleting record:";
}


?>