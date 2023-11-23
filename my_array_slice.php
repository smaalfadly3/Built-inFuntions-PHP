<?php

require_once 'my_count.php';

function my_array_slice($arr,$index) {
    $final=[];
    $count = my_count($arr);
    $i = 0;
    foreach ($arr as $key => $value) {
        if ($i >= $index) {
            $final[$key] = $value;
        }
        $i++;
    }

    return $final;

}
// $a=array("red","green","blue","yellow","pink");
// $a = array("a" => "red", "b" => "green", "c" => "blue");

// $result=my_array_slice($a,1);
// print_r($result);