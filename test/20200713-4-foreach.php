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
<?php
$p = [
    'name' => 'PETER',
    'age' => 27,
    'gender' => 'male',
    123
];

foreach($p as $k => $v){
    echo "$k =&gt; $v <br>";
//    echo htmlentities("$k => $v <br>");
}
?>

</body>
</html>