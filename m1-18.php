<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>入力フォームを試す</title>
</head>
<body>
    <form action= "" method = "post">
        <input type="text" name="str">
        <input type="submit" name="submit">
    </form>
    <?php
        $str = $_POST["str"];
        ;
    ?>
</body>
</html>