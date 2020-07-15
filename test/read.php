<?php

require __DIR__. '/__connect_db.php';
$sql = "SELECT * FROM addressbook";

$stmt= $pdo->query($sql);

$row = $stmt->fetch(PDO::FETCH_NUM);

print_r($row);

?>