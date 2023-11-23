<?php

function my_array_keys($arr) {
    $final=[];
    foreach ($arr as $key=>$value) {
        $final[]=$key;
    }
    return $final;

}
$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
$result=my_array_keys($a);
print_r($result);