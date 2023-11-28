<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trương đình văn 2121051389</title>
</head>
<body>
    <?php
    $items = array("cde.jpg","motivasion.png");
    foreach ($items as $item){
        echo "<img scr='images/$item' width = 50px height = 50px alt = '$item'>";
    }
    ?>
    <h1>funcion</h1>
    <?php
    $item=array("cde.jpg","motivasion.png");
    foreach ($items as $item){
        echo "<img scr="images/$item" width = 50px height = 50px alt = "$item">";
    }
    ?>
</body>
</html>