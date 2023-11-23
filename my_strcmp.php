<?php
require_once 'my_strlen.php';

function my_strcmp($txt1, $txt2) {
    $matched;
    for ($i=0; $i <my_strlen($txt1) ; $i++) { 
        for ($x=0; $x <my_strlen($txt2) ; $x++) { 
            if($txt1[$i]==$txt2[$x]){
                $matched=0;
            }
            else{
                $matched=-1;
                break;
            }
        }
    }
    return $matched;
}

echo my_strcmp('world', 'hello week world');
// my_strcmp('world', 'hello week world');