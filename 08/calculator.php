<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$result = $num1 + $num2;
c
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Emmetで基本構造を展開し<body>要素内に以下を入力 -->
<h1>計算</h1>
<!-- 以下の数値3箇所に変数出力を行う -->
<h2><?= $num1 ?> + <?= $num2 ?> = <?= $result ?></h2>
<form action="" method="get">
    <input type="text" name="num1" value="<?= $num1 ?>" size="2" maxlength="2">+
    <input type="text" name="num2" value="<?= $num2 ?>" size="2" maxlength="2">=
    <p><input type="submit" value="計算"></p>
</form>
</body>

</html>
