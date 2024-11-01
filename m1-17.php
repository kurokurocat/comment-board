<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>m1-17 practice</title>
</head>
<body>
   <?php
        $number = 9;
        if($number%3 == 0 && $number%5 == 0) {
            echo $number;
        } else if ($number%3 != 0 && $number%5 == 0) {
            echo "Buzz";
        } else if ($number%3 == 0 && $number%5 != 0) {
            echo "Fizz";
        }
    ?>
</body>
</html> 