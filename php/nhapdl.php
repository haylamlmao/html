<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trương đình văn 2121051389</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "fly";
    $conn = new mysqli($servername,$username,$password,$db);
    if($conn->connect_error){
        die("connect failed".$conn->connect_error);
    }
    echo"connertc succsec";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $id= $_POST["id"];
        $origin= $_POST["origin"];
        $desinasion = $_POST["destinasion"];
        $duration = $_POST["duration"];
        $sql = "INSERT INTO ds512 (id,origin,destinasion,duration) VALUES ('$id','$origin','$desinasion','$duration')";
        if($conn->query($sql)===TRUE){
            echo"dl đã được thêm vào bảng";
        }else{
            echo"lỗi nhập dl" .$sql. "<br>". $conn->error;
        }
    }
    $conn->close();
    ?>

</body>
</html>