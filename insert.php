<?php
$TITLE= $_POST["title"];
$DESCRIPTION = $_POST["description"];
include "config.php";
mysqli_query($con,"INSERT INTO `tbltodo`(`title`, `status`) VALUES ('$TITLE','false')" );
header("location: index.php");
?>