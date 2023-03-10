<?php
$count = '';
$totalPrice = '';

$goods['name']  = '和風柄レターセット';
$goods['price'] = 980;
if (!empty($_POST)) {
    $count = $_POST['count'];
    $totalPrice = number_format($goods['price'] * $count);
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

        th,
        td {
            border: 1px solid #666666;
            padding: 4px;
        }

        th {
            background-color: #dddddd;
        }
    </style>
    <title>ショッピングカート</title>
</head>

<body>
    <h1>ショッピングカート</h1>

    <form action="" method="post" novalidate>
        <table>
            <tr>
                <th>商品名</th>
                <th>単価</th>
                <th>数量</th>
                <th>小計</th>
            </tr>
            <tr>
                <td><?= $goods["name"] ?></td>
                <td><?= $goods["price"] ?></td>
                <td><input type="text" name="count" value="<?= $count ?>" size="2" maxlength="2"></td>
                <td><?= $totalPrice ?>円</td>
            </tr>
        </table>
        <p><input type="submit" value="更新"></p>
    </form>
</body>

</html>
