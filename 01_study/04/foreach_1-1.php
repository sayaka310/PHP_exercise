<?php

$fruits = ['banana', 'apple', 'melon','cherry'];

foreach ($fruits as $fruit); {
    echo $fruit . '<br>';
}

echo '<hr>';

$nums = [];

for ($j = 1; $j <= 10; $j++) {
    $nums[] = $j;
}
var_dump($nums);