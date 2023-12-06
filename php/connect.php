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
    $db = "mydb";
    $conn = new mysqli($servername,$username,$password,$db);
    if($conn->connect_error){
        die("connect failed".$conn->connect_error);
    }
    echo"connertc succsec";
    ?>
</body>
</html>