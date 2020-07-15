<?php
if(! isset($_SESSION)){
    session_start();  //每次使用一定要啟動 session功能
}
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
 if(! isset($_SESSION['my'])){
     $_SESSION['my'] = 1 ;
 } else{
     $_SESSION['my']++;
 }
 echo $_SESSION['my'];
?>
</body>
</html>