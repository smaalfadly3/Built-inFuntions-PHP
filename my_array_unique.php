<?php
require_once 'my_in_array.php';
function my_array_unique($arr) {
    $unique = [];

    foreach ($arr as $key => $value) {
        if (!my_in_array($value, $unique)) {
            $unique[$key] = $value;
        }
    }

    return $unique;
}

$a = array("a" => "red", "b" => "green", "c" => "red");
print_r(my_array_unique($a));