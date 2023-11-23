<?php
function my_count($arr) {
    $count=0;
    foreach ($arr as $item) {
        $count++;
    }
    return $count;
}
// echo my_count(array('Hello','World!','Beautiful','Day!'));
my_count(array('Hello','World!','Beautiful','Day!'));