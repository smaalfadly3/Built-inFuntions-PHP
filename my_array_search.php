<?php

function my_array_search($search, $arr) {
    foreach ($arr as $key => $value) {
        if ($value === $search) {
            return $key;
        }
    }
    return false;
}

$a = array("a" => "red", "b" => "green", "c" => "blue");
$result = my_array_search("red", $a);
echo $result;