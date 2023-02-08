<?php

declare(strict_types=1);
require_once(dirname(__FILE__) . '/db.inc.php');
require_once(dirname(__FILE__) . '/util.inc.php');

$name = '';
$age = '';
$address = '';
$created_at = date('Y-m-d H:i:s');
if (!empty($_POST)) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    try {
        $pdo = dbConnect();
        $stmt = $pdo->prepare(
            'INSERT INTO members (name, age, address, created_at) VALUES (:name, :age, :address, :created_at)'
        );
        $stmt->bindValue(':name', (string)$name, PDO::PARAM_STR);
        $stmt->bindValue(':age', (int)$age, PDO::PARAM_INT);
        $stmt->bindValue(':address', (string)$address, PDO::PARAM_STR);
        $stmt->bindValue(':created_at', (string)$created_at, PDO::PARAM_STR);
        $stmt->execute();
        header('Location: /practice/04_PHP/20/member.php');
    } catch (PDOException $e) {
        header('Content-Type: text/plain; charset=UTF-8', true, 500);
        exit($e->getMessage());
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員管理システム</title>
</head>

<body>
    <h1>会員登録</h1>
    <p><a href="member.php">会員一覧に戻る</a></p>
    <form action="" method="post" novalidate>
        <p>氏名：<input type="text" name="name" value="<?=h($name)?>"></p>
        <p>年齢：<input type="text" name="age" value="<?=h($age)?>"></p>
        <p>住所：<input type="text" name="address" value="<?=h($address)?>"></p>
        <p><input type="submit" value="送信"></p>
    </form>
</body>

</html>
