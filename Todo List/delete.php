<?php
include "config.php";
$id = $_GET['ID'];
$query = "delete from `tbltodo` where ID = $id";
$result = mysqli_query($con,$query);
header("location:index.php");
?>