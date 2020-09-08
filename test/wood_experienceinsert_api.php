<?php
require __DIR__ . '/../parts/__connect_db.php';

header('Content-Type: application/json');

$output = [
    'success' => false,
    'postData' => $_POST,
    'code' => 0,
    'error' => ''
];


if (mb_strlen($_POST['organizer']) < 2) {
    $output['code'] = 410;
    $output['error'] = '地點名稱長度要大於 2';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}


$sql = "INSERT INTO `a_wood_maker`(`organizer`, `address`, `email`, `mobile`, `open_time`, `close_time`, `images`, `introduction`) VALUES (?,?,?,?,?,?,?,?)";



$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['organizer'],
    $_POST['address'],
    $_POST['email'],
    $_POST['mobile'],
    $_POST['open_time'],
    $_POST['close_time'],
    $_POST['images'],
    $_POST['introduction'],
]);

//echo $stmt->rowCount();
//echo 'ok';

if ($stmt->rowCount()) {
    $output['success'] = true;
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);