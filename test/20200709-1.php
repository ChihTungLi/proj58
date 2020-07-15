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
$a = "abc\ndef\"ghi\\aa\'aa";
$b = 'abc\ndef\"ghi\\aa\'aa';
echo "$a<br>";
echo "$b<br>";

$name = 'Victor';
echo "{$name}123";
?>
</body>
</html>
