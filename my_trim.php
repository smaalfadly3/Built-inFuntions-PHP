<?php
require_once 'my_strlen.php';

function my_trim($txt, $word) {
    $wordLen = my_strlen($word);
    $txtLen = my_strlen($txt);
    $out='';
    $match = false;
    for ($i = 0; $i < my_strlen($txt); $i++) {
        $match = false;
        for ($x=0; $x < my_strlen($word); $x++) { 
            if ($txt[$i] == $word[$x]) {
                $match = true;
                break;
            }
        }
        if (!$match) {
            $out .= $txt[$i];
        }
    }

    return $out; 
}

// echo my_trim("Hello World!","Hed!" );
my_trim('world', 'hello week world');