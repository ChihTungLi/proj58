<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    GET:
    <?php print_r($_GET) ?>

    POST:
    <?php print_r($_POST) ?>

    REQUEST:
        <?php print_r($_REQUEST) ?>


</pre>


<form action="" method="post">
   <label for="account">帳號</label>
   <input type="text" id="account" name="account"><br>
    <label for="password">密碼</label>
    <input type="password" id="password" name="password"><br>
    <input type="checkbox" id="my_cb" name="my_cb" value="ok">
    <label for="my_cb">同意...</label>
    <br>
    <input type="submit" value="登入">
    <br>


</form>

</body>
</html>