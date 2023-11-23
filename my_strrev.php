<?php
require_once 'my_strlen.php';

function my_strrev($sentence){
    $senLen= my_strlen($sentence);
    $reversed='';

    for($x = $senLen - 1; $x >=0 ; $x--){

            $reversed.=$sentence[$x];  
    }
    return $reversed;
}
// echo my_strrev('hello');
my_strrev('hello');
