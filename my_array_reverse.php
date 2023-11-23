<?php

require_once 'my_count.php';

function my_array_reverse($arr) {
    $final=[];
    for ($i=my_count($arr)-1; $i>=0 ; $i--) { 
       $final[]=$arr[$i];
    }
    return $final;

}
$a=array("red","green","blue","yellow","pink");
$result=my_array_reverse($a);
print_r($result);