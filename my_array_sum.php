<?php

function my_array_replace($arr) {
    $sum=0;
    foreach ($arr as $elem) {
        $sum+=$elem;
    }
    return $sum;

}
$a=array(5,15,25);
$result=my_array_replace($a);
print_r($result);