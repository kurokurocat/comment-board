<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="text" placeholder="コメント">
        <input type="submit" name="submit">
    </form>
    <?php
        if (isset($_POST["text"])) {
            $text = $_POST["text"];
            if (isset($text)) {
                $filename = "m2-1.txt";
                $fp = fopen($filename,"a");
                fwrite($fp,$text.PHP_EOL);
                fclose($fp);
                echo $text."を受け付けました";
                echo "<br>";
            } else {
                echo "コメントを入力してください";
            }
        }
        $lines = file($filename,FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $message) {
            echo $message;
            echo "<br>";
        } 
    ?>
    
</body>
</html>