<?php
require_once 'my_strlen.php';

function my_strpos($word, $txt) {
    $wordLen = my_strlen($word);
    $txtLen = my_strlen($txt);

    for ($x = 0; $x <= $txtLen - $wordLen; $x++) {
        if ($txt[$x] == $word[0]) {
            $matched = true;
            for ($i = 1; $i < $wordLen; $i++) {
                if ($txt[$x + $i] != $word[$i]) {
                    $matched = false;
                    break;
                }
            }
            if ($matched) {
                return $x;
            }
        }
    }

    return "not found"; 
}

// echo my_strpos('world', 'hello week world');
my_strpos('world', 'hello week world');