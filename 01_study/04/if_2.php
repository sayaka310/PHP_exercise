<?php

$age = 20;

if ($age >= 20) {
    echo 'あなたは成人です' . '<br>';
} else {
    echo 'あなたは未成年です';
}

if ($age !== '18') {
    echo '値とデータ型が一致していません' . '<br>';
}

var_dump($age < 20);

echo '<br>';

var_dump($age !== '18');
