<?php
include "db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `final` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if($result) {
    header("Location: index.php?msg=Record Deleted Successfully!");
}
else{
    echo "Failed: " . mysql_error($conn);
}
?>