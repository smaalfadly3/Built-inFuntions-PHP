<?php

require_once 'my_array_slice.php';

function my_array_shift(&$arr) {
    $shiftedValue = null;
    
    if (!empty($arr)) {
        $keys = array_keys($arr);
        $shiftedKey = $keys[0];
        $shiftedValue = $arr[$shiftedKey];

        $arr = my_array_slice($arr, 1);
    }
    
    return $shiftedValue;
}

$a = array("a" => "red", "b" => "green", "c" => "blue");

$shiftedValue = my_array_shift($a);
echo $shiftedValue . "\n";
print_r($a);