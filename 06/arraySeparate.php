<?php

$alph = 'A-B-C';

/* A | B | C | D | 4個 */

//文字列を-を元に配列へ変換
$alphArr = explode('-', $alph);

//元の配列にDを加えて要素数を取得
$arrLength = array_push($alphArr, 'D');

//元の配列に4個を追加
array_push($alphArr, $arrLength . '個');

echo implode('|', $alphArr);
