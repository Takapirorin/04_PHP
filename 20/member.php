<?php

declare(strict_types=1);
require_once(dirname(__FILE__) . '/db.inc.php');

try {
    $pdo = dbConnect();
    $sql = 'select * from members';
    $members = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    header('Content-Type: text/plain; charset=UTF-8', true, 500);
    exit($e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
            width: 600px;
        }

        tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        th,
        td {
            border: 1px solid #aaa;
            padding: 5px;
            text-align: center;
        }

        th {
            background-color: #ddd;
        }
    </style>
    <title>会員管理システム</title>
</head>
<h1>会員リスト</h1>
<p><a href="addMember.php">会員登録する</a></p>
<table>
    <tr>
        <th>会員ID</th>
        <th>氏名</th>
        <th>年齢</th>
        <th>住所</th>
        <th>登録日時</th>
    </tr>
    <?php for ($i = 0; $i < count($members); $i++) : ?>
        <tr>
            <td><?= $members[$i]['id'] ?></td>
            <td><?= $members[$i]['name'] ?></td>
            <td><?= $members[$i]['age'] ?></td>
            <td><?= $members[$i]['address'] ?></td>
            <td><?= $members[$i]['created_at'] ?></td>
        </tr>
    <?php endfor; ?>
</table>

<body>

</body>

</html>
