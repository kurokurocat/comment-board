<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
        $filename = "member.csv";
        $fp = fopen($filename, "r");
        //$size = sizeof(file("member.csv"));
        echo '<table border="1">
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mail</th>
            <th>Password</th>
            </tr>';
        while ($data = fgetcsv($fp)) {
            /*for ($i = 0;$i <= $size; $i++) {
                echo $data[$i]."<br>";
            }*/
            echo '<tr>';
            echo '<td>'.$data[0].'</td>';
            echo '<td>'.$data[1].'</td>';
            echo '<td>'.$data[2].'</td>';
            echo '<td>'.$data[3].'</td>';
            echo "</tr>";
        } 
   ?> 
</body>
</html>