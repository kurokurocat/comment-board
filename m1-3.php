<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>m1-3 練習</title>
</head>
<body>
    あいうえお<br>
    かきくけこ<br>
    <?php
        echo "こんにちは";
        echo "<br>";
        echo "Hello World!!";
        echo "<br>";
        $number = 2;
        $number1 = 6;
        echo $number % $number1;
        echo "<br>";
        $str = "Hello World!!";
        echo $str;
        echo "<br>";
        $str1 = "Hello"."world";
        echo $str1;
        echo "<br>";
        echo "this is ".$number;
        echo "<br>";
        date_default_timezone_set("Asia/Tokyo");
        $date = date("Y年m月d日 H時i分s秒");
        echo $date;
    ?>
</body>
</html>