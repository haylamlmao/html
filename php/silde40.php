<?php
$servername = "localhost";
$username ="root";
$password ="";
$db= "dskhachhang";
$conn = new mysqli($servername,$username.$password,$db);
if($conn->connection_error){
    die("kết nối thất bại".$conn->connection_error);

}
echo"kết nối thành công ";