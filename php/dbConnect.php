<?php
// DB接続
try {
    $pdo = new PDO('mysql:dbname=kadai09_db;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DBConnectError: ' . $e->getMessage());
}
?>