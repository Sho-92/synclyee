<?php
require_once '../../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    try {
        // カテゴリー一覧を取得
        $stmt = $pdo->prepare("SELECT id, name FROM categories ORDER BY name ASC");
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // ヘッダーにContent-Typeを設定
        header('Content-Type: application/json');
        
        echo json_encode($categories); // JSON形式で返す
    } catch (Exception $e) {
        // エラーハンドリング
        http_response_code(500); // Internal Server Error
        echo json_encode(['error' => 'エラー: ' . $e->getMessage()]);
    }
}
?>
