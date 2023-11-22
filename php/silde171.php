<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trương đình văn 2121051389</title>
</head>
<body>
    <?php
    $USD = 22300;
    $EUR= 27300;
    $AUD = 17000;
    $JPY = 120;
    $amount = $_get['amount'];
    echo"$amount usd is equal";
    if ($_get["currency"]=="USD"){
        echo $amount *$USD;
    }
    elseif ($_get["currency"]=="EUR"){
        echo $amount *$EUR;
    }
    elseif ($_get["currency"]=="AUD"){
        echo $amount *$AUD;
    }
    else{
        echo $amount *$JPY;
    }
    echo "vnd";
    ?>
</body>
</html>