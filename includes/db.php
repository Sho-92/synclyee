<?php
// DB接続設定
$host = 'localhost';    // MySQLのホスト名
$db   = 'synclyee';        // データベース名
$user = 'root';         // MySQLのユーザー名（rootがデフォルト）
$pass = 'root';             // パスワード（rootがデフォルト）
$charset = 'utf8mb4';   // 文字セット（UTF-8を使う）

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    // echo "データベースに接続成功";
} catch (\PDOException $e) {
    echo "接続失敗: " . $e->getMessage();
}
?>
