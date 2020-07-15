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
<!--Hello, --><?//= $_GET['name']; ?><!-- !-->
<!--<br>-->
<!--I am --><?//= $_GET['age']; ?><!-- years old-->


Hello, <?= isset($_GET['name']) ? $_GET['name'] : 'Nobody' ?>
<br>
<?= isset($_GET['age']) ? $_GET['age'] : "I don't Know" ?>
</body>
</html>
