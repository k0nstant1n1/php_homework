<?php
/*Написать функцию, которая переворачивает строку.
 Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.
 */

function mirrorString($str){
$arr = str_split($str,1);
krsort($arr);
return implode('',$arr);
}
echo mirrorString($_GET["text"]);