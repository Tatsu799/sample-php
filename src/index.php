<?php

header('Content-Type: application/json; charset=UTF-8');
// // リクエストメソッドを判定
$method = $_SERVER['REQUEST_METHOD'];


if ($method === 'POST') {
  //POST
  // api.php
  // header('Content-Type: application/json; charset=UTF-8');
  
  // POSTデータの取得
  // $name = $_POST['name'] ?? null;
  // $email = $_POST['email'] ?? null;
  $name = 'Ken';
  $email = 'ken@example.com';
  
  // データがない場合のエラーレスポンス
  // if (!$name || !$email) {
  //     echo json_encode([
  //         'status' => 'error',
  //         'message' => '必要なデータが不足しています。',
  //     ]);
  //     exit;
  // }
  
  // 正常なレスポンスを返す
  $response = [
      'status' => 'success POST',
      'data' => [
          'name' => $name,
          'email' => $email,
          'timestamp' => date('Y-m-d H:i:s'),
      ],
  ];
  
  echo json_encode($response);

} elseif ($method === 'GET') {
  //GET
  // api.php
  // header('Content-Type: application/json; charset=UTF-8');
  
  // GETデータの取得
  // $name = $_GET['name'] ?? null;
  // $email = $_GET['email'] ?? null;
  $name = 'Tom';
  $email = 'tom@example.com';
  
  // データが不足している場合のエラーレスポンス
  // if (!$name || !$email) {
  //     echo json_encode([
  //         'status' => 'error',
  //         'message' => '必要なデータが不足しています。',
  //     ]);
  //     exit;
  // }
  
  // 正常なレスポンスを返す
  $response = [
      'status' => 'success GET',
      'data' => [
          'name' => $name,
          'email' => $email,
          'timestamp' => date('Y-m-d H:i:s'),
      ],
  ];
  
  echo json_encode($response);

} else {
  if (!$name || !$email) {
    echo json_encode([
        'status' => 'error',
        'message' => '必要なデータが不足しています。',
    ]);
    exit;
}
}




//参考
/////////////////////////////////////////
// <?php
// header('Content-Type: application/json; charset=UTF-8');

// // データベース接続設定
// $host = 'localhost';  // ホスト名
// $db = 'simple_api';   // データベース名
// $user = 'root';       // ユーザー名
// $password = '';       // パスワード

// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     echo json_encode(['status' => 'error', 'message' => 'データベース接続エラー: ' . $e->getMessage()]);
//     exit;
// }

// // リクエストメソッドを判定
// $method = $_SERVER['REQUEST_METHOD'];

// // データの取得 (GET または POST に対応)
// if ($method === 'POST') {
//     $name = $_POST['name'] ?? null;
//     $email = $_POST['email'] ?? null;
// } elseif ($method === 'GET') {
//     $name = $_GET['name'] ?? null;
//     $email = $_GET['email'] ?? null;
// } else {
//     echo json_encode(['status' => 'error', 'message' => 'サポートされていないリクエストメソッドです。']);
//     exit;
// }

// // 必須データが不足している場合のエラー
// if (!$name || !$email) {
//     echo json_encode(['status' => 'error', 'message' => '必要なデータが不足しています。']);
//     exit;
// }

// // データベースに保存
// try {
//     $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
//     $stmt->bindParam(':name', $name);
//     $stmt->bindParam(':email', $email);
//     $stmt->execute();

//     // 正常なレスポンスを返す
//     echo json_encode([
//         'status' => 'success',
//         'method' => $method,
//         'data' => [
//             'name' => $name,
//             'email' => $email,
//             'timestamp' => date('Y-m-d H:i:s'),
//         ],
//     ]);
// } catch (PDOException $e) {
//     echo json_encode(['status' => 'error', 'message' => 'データ挿入エラー: ' . $e->getMessage()]);
//     exit;
// }