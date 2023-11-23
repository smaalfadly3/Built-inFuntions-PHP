<?php

function my_in_array(&$arr,$elem) {
    
    foreach ($arr as $item) {
       if($item == $elem){
        return true;
       }
    }
    return false;


}
// $a=array("red","green","yellow","blue");
// if (my_in_array($a,"yellow"))
//   {
//   echo "Match found";
//   }
// else
//   {
//   echo "Match not found";
//   }