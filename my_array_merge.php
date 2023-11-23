<?php

function my_array_merge($arr1, $arr2) {
    $merged = $arr1;
    foreach ($arr2 as $value) {
        $merged[] = $value;
    }
    return $merged;
}

$a1 = array("red", "green");
$a2 = array("blue", "yellow");

$result = my_array_merge($a1, $a2);
print_r($result);