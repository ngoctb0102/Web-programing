<?php
$conn = mysqli_connect(
    "localhost",
    "root",      //""username"
    "",          //"password"
    "lab11"    //"database name"
);
mysqli_query($conn, "SET NAMES 'utf8'");
?>