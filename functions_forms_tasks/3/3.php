<?php
/*
 Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
 Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.*/

$str = "Вечірнє сонце, дякую за день! Вечірнє сонце, дякую за втому, за ціх лісів просвітлених єдем і за волошку в житі золотому";

function removeLongWords($maxLenght,$strin){
    $validatestr = [',','.', '=', '-','?', '!'];
    $stringv = str_replace($validatestr, ' ',$strin);
    $arrayv = explode(' ',$stringv);
    $i = 0;
    foreach($arrayv as $item){
        if(mb_strlen($item) > $maxLenght){
            $arrayv[$i] = '';
        }
        $i++;
    }

    $stringre = implode( ' ',$arrayv);
    return $stringre;
}

echo removeLongWords($_GET['enter'],$str);