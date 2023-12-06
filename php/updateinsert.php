<?php
require 'connect.php';
$sql = "INSERT INTO dskhachhang (ghengoi,name,diachi,number) values (5,'văn','khánh hồng','0366') ";
if ($conn->query($sql)===true){
    echo "new khách add success";
}else{
    echo"erro". $sql."<br>".$conn->error;
}
$conn->close();
?>