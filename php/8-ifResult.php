<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "the game";
    if ($_get["response"]=="yes")
    {
        echo "đã thoát game";
    }
    if($_get["response"]=="no")
    {
        echo "will be continued in 3s";
    }
    echo "<br>after the statement";
    ?>
    //trương đình văn 2121051389
</body>
</html>