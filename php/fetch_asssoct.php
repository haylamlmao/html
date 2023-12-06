<?php
require "connect.php";
mysqli_set_charset($conn,'UTF8');
$sql = "SELECT * FROM dskhachang";
$result = $conn->query($sql);
print_r($result);
$row = $result->fetch_assoc();
echo"<br>";
print_r($row);
$row= $result->fetch_assoc();
print_r($row);
$conn->close();
?>