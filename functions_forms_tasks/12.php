<?php
/* Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом,
     что предложения идут в обратном порядке.
 */

function sentenceReverse($str){
    $arr = explode('.', $str);
    $i = 0;
    $arr2 = [];
    foreach($arr as $item){
        if($item){
            $arr2[$i] = $item;
            $i++;
        }

    }
    $aReverse = array_reverse($arr2);
    return implode('.', $aReverse);
}

echo sentenceReverse('А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.');