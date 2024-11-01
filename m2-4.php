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
        //フォームが送信された時のみ処理が実行されるように
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //isset()は変数や配列が存在しているかどうか、!emptyは変数や配列の値がから出ないかどうかの確認
            if (isset($_POST["text"]) && !empty($_POST["text"])) {
                $text = $_POST["text"];
                $filename = "m2-1.txt";
                echo $text."を受け付けました"."<br>";
                $fp = fopen($filename, "a");
                fwrite($fp, $text.PHP_EOL);
                fclose($fp);
            } else {
                echo "コメントを入力してください"."<br>";
            }
        }

        // ファイルの内容を表示
        if (file_exists("m2-1.txt")) {
            $lines = file("m2-1.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($lines as $message) {
                echo $message;
                echo "<br>";
            }
        }
    ?>
</body>
</html>
