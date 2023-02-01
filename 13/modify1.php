<?php
$weekday = ['水', '木', '金', '土','日', '月', '火' ];
$d = new DateTime('2023-02-01');
$w = $weekday[$d->format('w')];

$d1 = new DateTime('2023-02-01');
$d2 = new DateTime('2023-02-01');
$d1->modify('last day of February 2025');
$d2->modify('+10 days');
$interval = $d1->diff($d2);
$days = $interval->days;
echo $d1->format('Y年m月d日') . '(' . $w . ')の方が 「' . $days . ' 日分」' . $d2->format('Y年m月d日') .  '(' . $w . ')より新しいです';
