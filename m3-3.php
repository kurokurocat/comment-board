<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        th {
            background-color: #0000FF;
            color: white;
            font-family: arial, sans-serif;
            padding: 10px;
        }
        td {
            font-family: verdana, sans-serif;
            color: white;
            background-color: #6495ED;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="comment" placeholder="コメント">
        <input type="text" name="name" placeholder="名前">
        <input type="submit" name="submit">
    </form>
    <?php
        $filename = "comment.csv";
        $name = $_POST["name"];
        $comment = $_POST["comment"];
        $date = date("Y年m月d日　H時i分s秒");
        $countLine = 1;

        $fileExists = file_exists($filename);
        if (empty($name) || empty($comment)) {
            echo "名前とコメントの両方を入力してください";
        } else {
            $fp = fopen($filename, "a+");
    
            rewind($fp);
            while (fgetcsv($fp) !== false) {
                $countLine++;
            }
    
            fputcsv($fp,[$countLine, $name, $comment, $date]);
            fclose($fp);
        }
        $fp = fopen($filename, "r");
        echo '<table border = "1">
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>comment</th>
            <th>timezone</th>
            </tr>';
        
        while ($data = fgetcsv($fp)) {
            echo '<tr>';
            echo '<td>'.$data[0].'</td>';
            echo '<td>'.$data[1].'</td>';
            echo '<td>'.$data[2].'</td>';
            echo '<td>'.$data[3].'</td>';
            echo '</tr>'; 
        }
        fclose($fp);
        echo "</table>";  
    ?>
</body>
</html>