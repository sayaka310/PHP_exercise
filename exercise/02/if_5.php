<?php
//https://techacademy.jp/magazine/35255 こちらを参考に作成しました
$num = 10;

$flg = true;
for($i=2; $i < $num ; $i++) {
    if($num % $i == 0) {
    $flg = false;
    break;
    }
}

if ($flg) {
    echo $num. "は素数です。";
} else {
    echo $num. "は素数ではありません。";
}
