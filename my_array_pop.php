<?php

require_once 'my_count.php';

function my_array_pop($arr) {
    $final=[];
    for ($i=0; $i < my_count($arr)-1 ; $i++) { 
       $final[]=$arr[$i];
    }
    return $final;

}
$a=array("red","green","blue","yellow","pink");
$result=my_array_pop($a);
print_r($result);