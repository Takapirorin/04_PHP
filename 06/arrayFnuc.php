<?php

$domain = 'http://example.com?';
$text = 'PHP　MySQL　Laravel';

$text = explode('　',$text);
echo '<pre>';
print_r($text);
echo '</pre>';
// $text = array_values([0 => '0=PHP', 1 => '&1=MySQL', 2 => '&2=Laravel'] );

$text = http_build_query([ 0 => 'PHP', 1 => 'MySQL', 2 => 'Laravel']);	
// $text = http_build_query($text);	

echo $domain . $text;

echo '<pre>';
print_r($domain . $text);
echo '</pre>';

/* http://example.com?0=PHP&1=MySQL&2=Laravel */
