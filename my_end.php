<?php

function my_end($array) {
    $lastValue = null;
    foreach ($array as $value) {
        $lastValue = $value;
    }
    return $lastValue;
}

$people = array("Peter", "Joe", "Glenn", "Cleveland");
echo my_end($people);