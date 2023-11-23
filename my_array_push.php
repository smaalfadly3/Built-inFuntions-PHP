<?php

require_once 'my_count.php';

function my_array_push($arr) {
    $args=func_get_args();
    $final=[];
    for ($i=0; $i < my_count($arr) ; $i++) { 
       $final[]=$arr[$i];
    }
     for ($i=1; $i <my_count($args) ; $i++) { 
        $final[]=$args[$i];
     }
     return $final;

}
$a=array("red","green");
$result=my_array_push($a,"blue","yellow","pink");
print_r($result);