<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <pre>
        <?php
        $p = [
            'name' => 'PETER',
            'age' => 27,
            'gender' => 'male',
        ];

        $a = $p ;//複製新的陣列
        $b = &$p; //設定參照

        $p['age']= 66;
        print_r($p);
        print_r($a);
        print_r($b);

        ?>
    </pre>
</div>
</body>
</html>
