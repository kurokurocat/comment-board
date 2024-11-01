<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
        $users = [
            [
                'id' => 1,
                'name' => 'Aさん',
                'email' => 'aaa@a.com',
                'password' => 'aaaaa'
            ],
            [
                'id' => 2,
                'name' => 'Bさん',
                'email' => 'bbb@b.com',
                'password' => 'bbbbb'
            ],
            [
                'id' => 3,
                'name' => 'Cさん',
                'email' => 'ccc@c.com',
                'password' => 'ccccc'
            ],
        ];
        $filename = "member.csv";
        $fp = fopen($filename,"w");
        foreach ($users as $line) {
            fputcsv($fp, $line);
        }
        fclose($fp);
   ?> 
</body>
</html>