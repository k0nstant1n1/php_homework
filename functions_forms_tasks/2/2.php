<?php
/*Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
   Реализовать с помощью функции.
 */

function top3($str){
    $validate = [',', '.', '-', '!', '?', ';', ':'];
    $validStr = str_replace($validate, ' ',$str);
    $arr = explode(' ', $validStr);
    $wordlen = [];
    foreach($arr as $key => $item){
        $wordlen[$key] = mb_strlen($item,"UTF-8");
    }
    arsort($wordlen);
    $finalStr = '';
    $i = 0;
   foreach($wordlen as $key => $value){
       if($i < 3){
           $finalStr .= $arr[$key] . "<br>";
           $i++;
           continue;
       }
       break;
   }
   return $finalStr;
}
if($_GET['submit']) {
    $string = $_GET['name1'];
    echo top3($string);
}

