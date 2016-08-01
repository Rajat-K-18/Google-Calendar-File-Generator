<?php
require("constants.php");

// 1. Create a database connection
$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die("Error " . mysqli_error($link)); 

?>
