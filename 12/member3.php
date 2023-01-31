<?php
declare(strict_types = 1);
require_once(dirname(__FILE__) . '/Member.php');

// $m1 = new Member();
// $m1->name = '山田太郎';
// $m1->age = 21;
// $m1->address = '東京都';

// $m2 = new Member();
// $m2->name = '鈴木次郎';
// $m2->age = 34;
// $m2->address = '大阪府';


// $m1->showInfo();
// $m2->showInfo();

// $m3 = new Member();
// $m3->setName('高橋三郎');
// $m3->setAge('32');
// $m3->setAddress('神奈川県');
// $m3->showInfo();

(new Member('高橋三郎', 32, '神奈川県'))->showInfo();
