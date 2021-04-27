<?php

include 'connect.php';
$name = $_GET['name'];

echo "$name" ; 

$sql = "delete from event2 where name='$name'";
$result = $conn->query($sql);
$conn->close();



header("location: test2.php");



?>