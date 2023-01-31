<?php

$prices = [298, 129, 198, 274, 625, 273, 296, 325, 200, 127, 398];
$price = '';

/**
 * 購入商品価格の配列を指定すると、10%の税込み価格を返す(
 */

function getPriceInTax(?array $prices, ?int $tax = 8): ?int
{
    if (empty($prices))return null;
    $totalPrice = 0;
    foreach ($prices as $price)  {
    $totalPrice += $price;
  }
  return floor($totalPrice * (1 + $tax / 100));
}


echo number_format(getPriceInTax($prices , 10)) . '円' ;
