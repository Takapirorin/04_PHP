<?php
$goods = [['name' => '和風柄レターセット', 'price' => 980],['name' => '毛筆ペン(細字) ', 'price' => 240]];
$count1 = $_POST['count1'];
$count2 = $_POST['count2'];
$subtotal1 = $goods1['price'] * $count1;
$subtotal2 = $goods2['price'] * $count2;
$total = $subtotal1 + $subtotal2;

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
            <td><?=$goods[0]["name"]?></td>
            <td><?=$goods[0]["price"]?></td>
            <td><input type="text" name="count1" value="<?=$count1?>" size="2" maxlength="2"></td>
            <td><?=$subtotal1?>円</td>
            </tr>
            <tr>
            <td><?=$goods[1]["name"]?></td>
            <td><?=$goods[1]["price"]?></td>
            <td><input type="text" name="count2" value="<?=$count2?>" size="2" maxlength="2"></td>
            <td><?=$subtotal2?>円</td>
            </tr>
            <tr>
                <th colspan="3">合計</th>
                <td><?=$total?>円</td>
            </tr>

        </table>
        <p><input type="submit" value="更新"></p>
    </form>
</body>

</html>
