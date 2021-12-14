<?php

function rastgeleSecme($arr,$size){

    $arr = array_filter($arr,function($e){
        return ($e != "" || $e != null) ? $e : false;
    });

    $arr = array_flip($arr);

    $arr = array_rand($arr,$size);

    return $arr;
}


$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

echo "<pre>";
print_r(rastgeleSecme($planets, 2));
print_r(rastgeleSecme($planets, 3));
print_r(rastgeleSecme($planets, 2));
print_r(rastgeleSecme($planets, 4));
print_r(rastgeleSecme($planets, 5));

?>