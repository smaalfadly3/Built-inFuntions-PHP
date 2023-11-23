<?php

function my_strlen($sentence) {
    $count = 0;
    while (isset($sentence[$count])) {
        $count++;
    }
    return $count;
}
// echo my_strlen("Hello World!");
my_strlen("Hello World!");
