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
function getDi(mixed $t = null, mixed $h): ?array
{   
    if (is_null($t) || empty ($h)) return null;

    $diArr['di'] = 0.81 * $t + 0.01 * $h * (0.99 * $t - 14.3) + 46.3;
    if ($diArr['di'] > 55) {
        $diArr['result'] = '寒い';
        }
        elseif ($diArr['di'] < 55) {
        $diArr['result'] = '寒い';
        }
        
}

?>

気温 <?=$t?>℃、湿度<?=$h?>%の時の不快指数は<?=getDi($t,$h)['di']?>で<?=getDi($t,$h)['result']?>です。
