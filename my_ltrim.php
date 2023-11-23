<?php

// function my_ltrim($str, $characters) {
//     $length = strlen($str);
//     $charLength = strlen($characters);
//     $trimmed = '';

//     $found = false;
//     for ($i = 0; $i < $length; $i++) {
//         $char = $str[$i];

//         $charFound = false;
//         for ($j = 0; $j < $charLength; $j++) {
//             if ($char === $characters[$j]) {
//                 $charFound = true;
//                 break;
//             }
//         }

//         if (!$charFound) {
//             $found = true;
//         }

//         if ($found) {
//             $trimmed .= $char;
//         }
//     }

//     return $trimmed;
// }

// $str = "Hello World! i am samaha";
// echo $str . "<br>";
// echo my_ltrim($str, "World!");