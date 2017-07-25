<?php

$str = 'X<br>';
$arr = ["X"];
for($i = 1; $i < 20; $i++){
    $arr[$i] = $arr[$i - 1] . "X";
    $str .= $arr[$i] . "<br>";
}

echo $str;
