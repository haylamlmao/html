<?php
require 'connect.php';
mysqli_set_charset($conn,'UTF8');
$sql = "SELECT * FROM dskhachang";
$result = $conn->query($sql);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        echo"ghengoi " .$row["ghengoi"].
            "name " .$row["name"].
            "diachi " .$row["diachi"].
            "number " .$row["number"]."<br>";
    }
}
else{
    echo"khong co chuyenbay";
}
$conn->close();
?>