<?php

$pdo = new PDO(
    'mysql:host=localhost; dbname=mydb; charset=utf8',
    'sysuser',
    'secret'
);
$stmt = $pdo->query('SELECT * FROM members');
$members = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border = 1>
        <tr>
            <th>id</th>
            <th>名前</th>
            <th>年齢</th>
            <th>住所</th>
            <th>作成日時</th>
        </tr>
        <?php for ($i = 0; $i < count($members); $i++) : ?>
            <tr>
                <td><?= $members[$i]['id'] ?></td>
                <td><?= $members[$i]["name"] ?></td>
                <td><?= $members[$i]['age'] ?></td>
                <td><?= $members[$i]['address'] ?></td>
                <td><?= $members[$i]['created_at'] ?></td>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>
