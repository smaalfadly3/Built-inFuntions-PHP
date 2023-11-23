<?php

function my_array_flip($arr) {
    $final=[];
    foreach($arr as $name=>$value){
        $final[$value]=$name;
    }
    return $final;

}
$a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=my_array_flip($a);
print_r($result);