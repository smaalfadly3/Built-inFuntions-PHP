<?php

function my_array_values($arr) {
    $final=[];
    foreach ($arr as $key=>$value) {
        $final[]=$value;
    }
    return $final;

}
$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
$result=my_array_values($a);
print_r($result);