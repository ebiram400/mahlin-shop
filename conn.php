<?php
$conn=mysqli_connect('localhost',"root",'','mahlin');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>