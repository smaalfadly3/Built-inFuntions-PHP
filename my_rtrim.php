<?php
require_once 'my_strlen.php';

function my_rtrim($str, $characters) {
    $length = my_strlen($str);
    $charLength = my_strlen($characters);
    $trimmed = '';

    for ($i = $length - 1; $i >= 0; $i--) {
        $char = $str[$i];
        $found = false;

        for ($j = 0; $j < $charLength; $j++) {
            if ($char === $characters[$j]) {
                $found = true;
                break;
            }
        }

        if (!$found) {
            $trimmed = $char . $trimmed;
        } else {
            break;
        }
    }

    return $trimmed;
}

$str = "Hello World! i am samaha";
echo $str . "<br>";
echo my_rtrim($str, "World!");