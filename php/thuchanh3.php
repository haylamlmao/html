<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trương đình văn 2121051389</title>
</head>
<body>
    <?php
    $cntt = 18;
    $cnttcls = 22;
    $khdl = 18;
    $diachat = 17;
    $moitruong = 15;
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $toan = $_POST["toan"];
        $ly = $_POST["ly"];
        $hoa = $_POST["hoa"];
        $diemtb = ($toan + $ly + $hoa)/3;
        $diemtb = ($toan + $ly + $hoa)/3;
        if ($diemtb > $cntt) {
            echo"bạn chúng tuyển ngành cntt"; 
        }else{
            echo"bạn đã chượt chuyên ngành cntt";
        };
        if ($diemtb >$cnttcls){
            echo"bạn đã chúng tuyển ngành cnttclc";
        }else{
            echo"bạn đã trượt";
        };
        if ($diemtb > $khdl){
            echo"bạn đã chúng tuyển ngàng khdl";
        }else{
            echo"bạn đã trượt";
        };
        if ($diemtb > $diachat){
            echo"bạn đã chúng tuyển ngàng địa chất";
        }else{
            echo"bạn đã trượt";
        };
        if ($diemtb > $moitruong){
            echo"bạn đã chúng tuyển ngàng môi trường";
        }else{
            echo"bạn đã trượt";
        };
    }
    ?>
</body>
</html>