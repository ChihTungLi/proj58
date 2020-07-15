
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
date_default_timezone_set('Asia/Taipei');
echo time(). '<br>';
echo date("Y-m-d H:i:s"). '<br>';
echo date("Y-m-d H:i:s",time()+180*24*60*60). '<br>';
echo date("Y-m-d H:i:s",time()+180*24*60*60). '<br>';
echo date("Y-m-d H:i:s N w",strtotime('2020/8/21')). '<br>';

?>
</body>
</html>