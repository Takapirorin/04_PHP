<?php
$spring = '';
$summer = '';
$fall = '';
$winter = '';

if (!empty($_POST)) {
    $spring = $_POST['spring'];
    $summer = $_POST['summer'];
    $fall = $_POST['fall'];
    $winter = $_POST['winter'];
}

/**
 * XSS対策の参照名省略
 *
 * @param string | null $string
 * @return string | null
 *
 */
function h(?string $string): ?string
{
    if (empty($string)) return null;
    return htmlspecialchars($string, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

require_once(dirname(__FILE__) . '/Chart.php');
$data = [$spring, $summer, $fall, $winter];
$label = ['春', '夏', '秋', '冬'];
$c = new Chart();
$c->setTitle('好きな季節 アンケート結果');
$c->addData($data, 'population');
$c->setXLabel($label);
$c->setXAxisName('季節');
$c->setYAxisName('（人）');
$c->setSize(300, 200);
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>集計結果入力</title>
</head>

<body>
    <h1>集計結果入力</h1>
    <form action="" method="post" novalidate>
        <table>
            <tr>
                <td>春</td>
                <td><input type="text" name="spring" value="<?= h($spring) ?>" size="4">人</td>
            </tr>
            <tr>
                <td>夏</td>
                <td><input type="text" name="summer" value="<?= h($summer) ?>" size="4">人</td>
            </tr>
            <tr>
                <td>秋</td>
                <td><input type="text" name="fall" value="<?= h($fall) ?>" size="4">人</td>
            </tr>
            <tr>
                <td>冬</td>
                <td><input type="text" name="winter" value="<?= h($winter) ?>" size="4">人</td>
            </tr>
        </table>
        <p><input type="submit" value="グラフ作成"></p>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
            <p><?php $c->printBarChart(); ?></p>
        <?php endif; ?>
    </form>
</body>

</html>
