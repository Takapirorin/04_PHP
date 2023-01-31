<?php

declare(strict_types=1);
require_once(dirname(__FILE__) . '/util.inc.php');

$seireki = '';
if (!empty($_POST)) {
    $seireki = $_POST['seireki'];
    $wareki = getWareki($seireki);
}
// function getWareki(mixed $seireki): string
// {
//     if (!is_numeric($seireki) || $seireki < 1868) {
//         $wareki = '未対応';
//     } elseif ($seireki >= 2019) {
//         $year = $seireki - 2018;
//         $wareki = '令和' . ($year == 1 ? '元' : $year);
//     } elseif ($seireki >= 1989) {
//         $year = $seireki - 1988;
//         $wareki = '平成' . ($year == 1 ? '元' : $year);
//     } elseif ($seireki >= 1926) {
//         $year = $seireki - 1925;
//         $wareki = '昭和' . ($year == 1 ? '元' : $year);
//     } elseif ($seireki >= 1912) {
//         $year = $seireki - 1911;
//         $wareki = '大正' . ($year == 1 ? '元' : $year);
//     } elseif ($seireki >= 1868) {
//         $year = $seireki - 1867;
//         $wareki = '明治' . ($year == 1 ? '元' : $year);
//     }
//     return $seireki . '年は' . $wareki;
// }

// /**
//  * XSS対策の参照名省略
//  *
//  * @param string | null $string
//  * @return string | null
//  *
//  */
// function h(?string $string): ?string
// {
//     if (empty($string)) return null;
//     return htmlspecialchars($string, ENT_QUOTES | ENT_HTML5, 'UTF-8');
// }
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>西暦⇒和暦変換</title>
</head>

<body>
    <h1>西暦⇒和暦変換</h1>
    <p>西暦を入力し、「計算」ボタンを押してください。</p>
    <form action="" method="post" novalidate>
        <p>西暦：<input type="text" name="seireki" value="<?=h($seireki)?>" size="4" maxlength="4">年</p>
        <p><input type="submit" value="送信"></p>
    </form>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
        <p>西暦<?= h($seireki) ?>年は<?= $wareki ?>です。</p>
        <!-- <p>西暦<?= getWareki($seireki) ?>年です。</p> -->
    <?php endif; ?>
</body>

</html>
