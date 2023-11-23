<?php
// require_once 'my_array_slice.php';
// require_once 'my_array_merge.php';
// require_once 'my_array_keys.php';
// function my_array_splice(&$array, $start, $length, $replacement = array()) {
//     $keys = my_array_keys($array);
//     $removed = my_array_slice($array, $start, $length);
//     $remaining = my_array_slice($array, $start + $length);
  
//     unset($array);
  
//     foreach ($keys as $key) {
//         if (!isset($removed[$key])) {
//             $array[$key] = $remaining[$key];
//         }
//     }
  
//     $insertPosition = $start;
  
//     foreach ($replacement as $key => $value) {
//         $array = my_array_merge(my_array_slice($array, 0, $insertPosition), array($key => $value), my_array_slice($array, $insertPosition));
//         $insertPosition++;
//     }
  
//     return $removed;
// }

// $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
// $a2 = array("a" => "purple", "b" => "orange");
// $removedElements = my_array_splice($a1, 0, 2, $a2);
// print_r($a1);