<?php

/**
 * 不快指数を計算する
*/
$t = 29;   // 気温 T
$h = 70;   // 湿度 H

// 気温をT (Temperature:℃)
// 湿度をH (Humidity:％)
// としたときの不快指数計算式


/**
 * 温度と湿度を指定すると不快指数の数値を返す
 *
 * @param [type] $t
 * @param [type] $h
 * @return void
 */
function getDi(?int $t, ?int $h): ?float
{   
    if (empty($t) || empty ($h)) return null;
    return 0.81 * $t + 0.01 * $h * (0.99 * $t - 14.3) + 46.3;
}

?>

気温 <?=$t?>℃、湿度<?=$h?>%の時の不快指数は<?=getDi($t,$h)?>です。
