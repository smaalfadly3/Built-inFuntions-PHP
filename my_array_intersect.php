<?php

function my_array_intersect($arr1, $arr2) {
    $final = [];
    foreach ($arr1 as $elem1) {
        foreach ($arr2 as $elem2) {
            if ($elem1 == $elem2) {
                $final[] = $elem1;
            }
        }
    }
    return $final; 
}

$a = array("red", "green", "yellow", "blue");
$b = array("red", "green", "pink", "blue");
$result=my_array_intersect($a, $b);
print_r($result);