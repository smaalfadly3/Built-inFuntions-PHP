<?php

function my_array_replace(&$arr1, $arr2) {
    $arr1 = [];  
    foreach ($arr2 as $value) {
        $arr1[] = $value; 
    }
}

$a1 = array("red", "green");
$a2 = array("blue", "yellow", "pink");
my_array_replace($a1, $a2);
print_r($a1);