<?php
$fruits = ['リンゴ','バナナ','ぶどう'];

$arrayList = [
    'リンゴ' => 100,
    'バナナ' => 200,
    'ぶどう' => 300
];

echo $fruits[0] . '<br>';
echo $fruits[1] . '<br>';
echo $fruits[2];

// スニペット dumpで展開*ロジック側のみ
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// スニペット prで展開*ロジック側のみ
echo '<pre>';
print_r($fruits);
echo '</pre>';

unset($fruits[2]);

$fruits[] = 'みかん';

// echo $fruits[2]; 値が削除されている場合はUndefinedで表示される

$arrayList['イチゴ'] = 400;
$arrayList['リンゴ'] = 80;

echo '<pre>';
print_r($arrayList);
echo '</pre>';


// $fruits = [['リンゴ'], [['バナナ']]];
// $fruits[] = '梨';
// $fruits[][] = '柿';
// $fruits[1][1][] = '桃';
// echo '<pre>';
// print_r($fruits);
// echo '</pre>';
