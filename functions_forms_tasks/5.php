<?php
/**Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
 *  Директория и искомое слово задаются как параметры функции.</p>

 */

function searchFilesByWord($dir, $word){
    $arr = scandir($dir);
    $matches = [];
    foreach($arr as $item){
        if(strchr($item, $word)){
            array_push($matches,$item);
        }
    }
    foreach($matches as $match){
        echo $match . "<br>";
    }
}

searchFilesByWord(DIRECTORY_SEPARATOR . @xampp,"apache");