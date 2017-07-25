<?php
/* Написать функцию, которая считает количество уникальных слов в тексте.
 Слова разделяются пробелами. Текст должен вводиться с формы.
 */

function uniqueWord($str){
    $valid = [',', '.', ' - ', '?', '!', ':', ';', '<', '>', '='];
    $validStr = str_replace($valid, ' ',$str);
    $arr = explode(' ',$validStr);
    foreach($arr as $item){
        foreach($arr as $item2){
            if($item === $item2){
                $item2 = null;
            }
        }
    }
    $count = 0;
    foreach($arr as $elem){
        if($elem == null){
            continue;
        }
        $count++;
    }
    return $count . ', ровно столько уникальных слов в этом тексте';
}

echo uniqueWord($_GET["text"],"UTF-8");