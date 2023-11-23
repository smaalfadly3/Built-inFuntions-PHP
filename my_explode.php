<?php
require_once 'my_strlen.php';
function my_explode($separator,$sentence) {
    $arr = array();
    $lastPos = 0;
    $length = my_strlen($sentence);
    for ($i = 0; $i < $length; $i++) {
        if ($sentence[$i] == $separator || $i == $length - 1) {
            $word = substr($sentence, $lastPos, $i - $lastPos);
            array_push($arr, $word);
            $lastPos = $i + 1; 
        }
    }
    print_r($arr);
}
echo my_explode(" ","Hello world. It's a beautiful day.");