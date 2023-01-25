<?php

$id = $_GET['id'];
$goodsList = ['テレビ','パソコン','携帯電話','冷蔵庫','洗濯機'];
$itemName = $goodsList[$id];

?>

<p><?=$itemName?>が選択されました</p>

<p><a href="lists.php">一覧ページに戻る</a></p>
