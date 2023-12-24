<?php
include "config.php";
$query = "delete from `tbltodo`";
$result = mysqli_query($con,$query);
header("location:index.php");
?>