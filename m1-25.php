<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    $str = "Hello World";
    $filename="m_1-25.txt"; 

    $fp = fopen($filename,"a");
    fwrite($fp, $str.PHP_EOL);
    fclose($fp); 

    echo "書き込み成功！";
?>
</body>
</html>