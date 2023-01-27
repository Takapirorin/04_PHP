<?php

for ($i = 1; $i <= 100 ; $i++){
    if( $i % 5 == 0 && $i % 3) {
        $x = $i .':FizzBuzz';
    } elseif( $i % 5 == 0) {
        $x = $i .':Fizz';
    } elseif( $i % 3 == 0) {
        $x = $i .':Buzz';
    } else {
        $x = $i;
    }
    echo $x .'<br>';
}
