<?php

function my_array_combine($keys, $values) {
    $combined = [];
    $count = min(count($keys), count($values));
    for ($i = 0; $i < $count; $i++) {
        $combined[$keys[$i]] = $values[$i];
    }
    return $combined;
}

$keys = array("Peter", "Ben", "Joe");
$values = array("35", "37", "43");
$combinedArray = my_array_combine($keys, $values);
print_r($combinedArray);