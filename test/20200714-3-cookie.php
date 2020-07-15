<?php
$mycookie = isset($_COOKIE['mycookie']) ? intval($_COOKIE['mycookie']):0;
$mycookie++;
setcookie('mycookie',$mycookie);
?>

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
//echo $_COOKIE['mycookie'];
if(isset($_COOKIE['mycookie'])){
    echo $_COOKIE['mycookie'];

}
?>
</body>
</html>