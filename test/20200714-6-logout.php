<?php
session_start();

unset($_SESSION['user']); //清除某個session變數   session_destroy();是清掉全部 不建議使用

header('Location: 20200714-5-login.php');

?>