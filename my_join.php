<?php
require_once 'my_count.php';

function my_join($suparetor,$arr){
    $out='';
    for ($i=0; $i <my_count($arr) ; $i++) { 
        if($i==my_count($arr)){
            $out.=$arr[$i];
            break;
        }
        else{
            $out.=$arr[$i];
            $out.=$suparetor;
        }
    }
    return $out;

}

// echo  my_join(" ",array('Hello','World!','Beautiful','Day!'));
my_join(" ",array('Hello','World!','Beautiful','Day!'));