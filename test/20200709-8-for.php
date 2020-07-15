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
<table border="1">
    <?php for($i=1; $i<10;$i++): ?>

        <tr>
            <?php for($j=1;$j<10;$j++): ?>
                <td><?= sprintf('%s * %s = %s <br>',$i,$j,$i*$j); ?></td>
            <?php endfor ?>
        </tr>
    <?php endfor ?>




</table>

</body>
</html>