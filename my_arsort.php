<?php

require_once 'my_count.php';

function my_arsort($arr) {
    $length = my_count($arr);
    $keys = array_keys($arr);
    
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($arr[$keys[$j]] < $arr[$keys[$j + 1]]) {
                $temp = $arr[$keys[$j]];
                $arr[$keys[$j]] = $arr[$keys[$j + 1]];
                $arr[$keys[$j + 1]] = $temp;
            }
        }
    }
    
    return $arr;
}

$a = array("Peter" => 50, "Ben" => 37, "Joe" => 43);
$result = my_arsort($a);
print_r($result);