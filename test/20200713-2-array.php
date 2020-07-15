
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
<table border="1">
<pre>
    <?php

   $arr1 = array(2,4,6,8);
   $arr2 = [2, 4, 6, 8];

   $arr1[0]=123;
    $arr2[]=123;

   print_r($arr1);
   var_dump($arr2);
?>
</pre>



</table>

</body>
</html>
