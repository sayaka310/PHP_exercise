<?php

//足し算する関数
function add($a = 1 , $b = 1 )
{
    $sum = $a + $b;
    return $sum;
}

echo add(2, 3) . '<br>';


echo '<hr>';

function getCircleArea($radius)
{
    return $radius * $radius * pi();
}

echo getCircleArea(5);

var_dump(add());

