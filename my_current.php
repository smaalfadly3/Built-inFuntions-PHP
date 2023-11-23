<?php


function my_current($array) {
    foreach ($array as $value) {
        return $value;
    }
    
    return null;
}
$people = array("Peter", "Joe", "Glenn", "Cleveland");
echo my_current($people);