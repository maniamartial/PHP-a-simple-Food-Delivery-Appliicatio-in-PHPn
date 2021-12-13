<?php

$conn = new mysqli('localhost', 'root', '', 'food_del_sys');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>