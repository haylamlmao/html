<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trương đình văn 2121051389 </title>
</head>
<body>
    <h1>tìm chuyến bay</h1>
    <form action="" method="get" name="register">
        origin <input type="text" name="origin"/><br>
        destinasion<input type="text" name="destinasion"/><br>
        <input type="submit" value="search"><br>
    </form>
    <?php
    if(isset($_GET['origin'])){
        $origin = $_GET['origin'];
        $destinasion = $_GET['destinasion'];
        require "connect.php";
        mysqli_set_charset($conn,'UTF8');
        $sql= "SELECT * FROM ds512 WHERE origin = "origin" and destinasion='$destinasion' ";
        $result = $conn->query($sql);
        require 'readanddisplay.php';
        $conn->close();
    }
    ?>
</body>
</html>