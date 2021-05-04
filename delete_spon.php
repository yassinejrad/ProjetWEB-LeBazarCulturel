<?php

include 'connect.php';
$name = $_GET['name'];

echo "$name" ; 

$sql = "delete from sponsor where name='$name'";
$result = $conn->query($sql);
$conn->close();



header("location: view_sponsor.php");



?>