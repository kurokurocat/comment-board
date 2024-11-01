<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <a href="">リセット</a>
   <form action="" method="post">
            <input type="text" name="str" placeholder="何か入力">
            <input type="submit" name="submit" value="送信">
    </form>
        <br>
        <?php
            $str = $_POST["str"];
            echo "【".$str."】";
        ?>
        <?php
            if(isset($_POST["str"])){
                $str = $_POST["str"];
                echo "【".$str."】";
            } else {
                echo "-post送信なし-";
            }
        ?>
        <?php
            if(!empty($_POST["str"])){
                $str = $_POST["str"];
                echo "【".$str."】";
            } else {
                echo "-post中身なし-";
            }
        ?>
</body>
</html>