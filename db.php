<?php
$conn = new mysqli("localhost","root","","apiforge");
if($conn->connect_error) die("Database error");
session_start();
?>