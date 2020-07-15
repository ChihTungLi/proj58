<?php
session_start();

$users=[
        'a3289430amy'=>[
                'nickname'=>'隻隻',
                'pw'=>'123456'
        ],

        'bs457ad45'=>[
                'nickname'=>'Jerry',
                'pw'=>'987654'
],
];


if(isset($_POST['account']) and isset($_POST['password'])){
    if( !empty($users[$_POST['account']]) ) {
        if($users[$_POST['account']]['pw']==$_POST['password']){
            $_SESSION['user'] =[
                    'account'=>$_POST['account'],
                'nickname'=>$users[$_POST['account']]['nickname']
            ];
            }
        }
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div>
<?php if(isset($_SESSION['user'])): ?>
    <?= $_SESSION['user']['nickname'] ?> 歡迎回來 <br>
    <a href="20200714-6-logout.php">登出</a>

    <?php else: ?>
    <form action="" method="post">
        <label for="account">帳號</label>
        <input type="text" id="account" name="account"><br>
        <label for="password">密碼</label>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="登入">
        <br>
    </form>

    <?php endif; ?>

</div>




</body>
</html>