<?php
$id= $_GET["ID"];

include "config.php";
mysqli_query($con,"UPDATE `tbltodo` SET `status`=1 WHERE `id`=$id" );
header("location: index.php");
?>