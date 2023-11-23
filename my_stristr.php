<?php
require_once 'my_strpos.php';
require_once 'my_strlen.php';

function my_stristr($txt,$word) {
    $index=my_strpos($word, $txt);
    $out='';
    for ($i=$index; $i < my_strlen($txt) ; $i++) { 
        $out.=$txt[$i];
    }
    return $out;
}
// echo my_stristr('hello week world samaha', 'world');
my_stristr('hello week world', 'world');