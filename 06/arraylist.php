<?php
$fruits = ['リンゴ', 'バナナ', 'ぶどう'];

$fruits[2] = 'イチゴ';
$fruits[] = 'メロン';
unset($fruits[1]);

echo '<pre>';
var_dump($fruits);
echo '</pre>';

echo '<pre>';
print_r($fruits);
echo '</pre>';
