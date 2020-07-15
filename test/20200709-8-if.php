<?php
$cat = isset($_GET['cat']) ? intval($_GET['cat']) : 0 ;

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
<a href="?cat=1">cat 1</a>
<br>
<a href="?cat=2">cat2</a>

<?php if($cat==1) { ?>
<h2>CAT1</h2>
    <img src="images/cat1.jpg" alt="">
<?php } ?>
<?php if($cat==2) : ?>
    <h2>CAT2</h2>
    <img src="images/cat2.jpg" alt="">
<?php endif ?>

</body>
</html>