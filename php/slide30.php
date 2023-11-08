<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trương đình văn 2121051389</title>
</head>
<body>
    <form action="index.php" method="post">
        <p>nhập số a :</p>
        <input type="text" name="a"><br>
        <p>nhập số b :</p>
        <input type="text" name="b"> <br>
        <p>nhập số c :</p>
        <input type="text" name="c"> <br>
        <P>nhập cạnh 1 của hinh</P> 
        <input type="text" name="hu">
        <p>nhập cạnh 2 của hình</p>
        <input type="text" name="hi"><br>
        <input type="submit" >
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị nhập từ biểu mẫu
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    if($a<$b){
        echo"số a nhỏ hớn số b"; 
    }elseif($a>$b){
        echo"số a lớn hơn số b";
    }else{
        echo"số a bằng số b";
    }
    }
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $c = $_POST["c"];
    $D = $b^2 - 4*$a*$c;
    if($D<0){
        echo"<br> phương trình vô nghiệm";
    }elseif($D>0){
        echo"phương trình có 2 nghiệm phân biệt";
    }elseif($D==1){
        echo"phương trình có 1 nghiệm kép";
    }
if($_SERVER["REQUEST_METHOD"] == "POST") {
        $hu = $_POST["hu"];
        $hi = $_POST["hi"];
        if($hu==$hi){
            echo"đây là hình vuông";
        }else{
            echo"đây là hình chữ nhật";
        }
    }
}
?>
<?php
    #SỬ DỤNG HÀM SUBSTR-COUNT ĐỂ ĐẾM SỐ LẦN XUẤT HIỆN
    $chuoi = "chung tôi là sinh viên trường đại học mỏ địa chất";
    $soLanXuatHien = substr_count($chuoi, 'h');

    echo "<br>Số lần xuất hiện của chữ 'h' là: " . $soLanXuatHien;
?>
</body>
</html>