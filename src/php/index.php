<?php
// api.php
header('Content-Type: application/json; charset=UTF-8');

// POSTデータの取得
$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;

// データがない場合のエラーレスポンス
if (!$name || !$email) {
    echo json_encode([
        'status' => 'error',
        'message' => '必要なデータが不足しています。',
    ]);
    exit;
}

// 正常なレスポンスを返す
$response = [
    'status' => 'success',
    'data' => [
        'name' => $name,
        'email' => $email,
        'timestamp' => date('Y-m-d H:i:s'),
    ],
];

echo json_encode($response);
