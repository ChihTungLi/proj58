
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    td{
        width: 30px;
        height: 30px;
    }
    </style>
</head>
<body>
<table border="1">



    <?php for($red=0; $red<255;$red+=17): ?>

        <tr>
            <?php for($green=0; $green<255;$green+=17): ?>
            <td style="background-color: #<?= sprintf("%'.06X",$red*256*256+$green*256)?>"></td>
            <?php endfor ?>
        </tr>
    <?php endfor ?>




</table>

</body>
</html>
