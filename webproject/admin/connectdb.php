<?php

$connect = new mysqli("localhost", "ayse", "2003", "maindb");
$connect->set_charset("utf8");
if ($connect) {
    echo "Database connection established successfully";
} else {
    echo "Error connecting to database: " . mysqli_connect_error();
}

?>