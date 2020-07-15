
<?php
//用While迴圈 一筆一筆讀出資料
require __DIR__. '/__connect_db.php';
header('Content-Type:text/plain'); //以文字呈現 plain可以改成html 參考MIME類別

$sql = "SELECT * FROM addressbook";

$stmt= $pdo->query($sql); //執行SQL

while($row = $stmt->fetch()){
    echo json_encode($row,JSON_UNESCAPED_UNICODE). "\n";
}


?>