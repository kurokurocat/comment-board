<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <form action="" method = "post">
        <input type="number" name="number">
        <input type="submit" name="submit">
   </form>
   <?php
        $num = $_POST["number"];
        $filename="m_1-27.txt";
        
        $fp = fopen($filename, "a");
        fwrite($fp,$num.PHP_EOL);
        fclose($fp);

        echo "success write!!";
        echo "<br>";
   ?>
   <?php
          $filename = "m_1-27.txt";
          $lines = file($filename,FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

          foreach ($lines as $num) {
               if ($num%3 == 0 && $num%5 == 0) {
                    echo "BuzzFizz";
                    echo "<br>";
               } else if ($num%3 != 0 && $num%5 == 0) {
                    echo "Buzz";
                    echo "<br>";
               } else if ($num%3 == 0 && $num%5 != 0) {
                    echo "Fizz";
                    echo "<br>";
               } else {
                    echo $num;
                    echo "<br>";
               }
          }
   ?> 
</body>
</html>