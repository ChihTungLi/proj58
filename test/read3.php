
<?php

require __DIR__. '/__connect_db.php';

//header('Content-Type:text/plain'); //以文字呈現 plain可以改成html  參考MIME類別

$sql = "SELECT * FROM addressbook";

$stmt= $pdo->query($sql); //執行SQL

echo $stmt->rowCount()."\n";  //算出總共有幾筆資料

echo json_encode($stmt->fetchAll(), JSON_UNESCAPED_UNICODE) ;
 //fetchAll等於把所有資料抓出來 若太多筆資料會吃掉記憶體 server會爆炸 母湯


?>