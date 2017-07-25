<?php
/**Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.
 */

function dir_list($dir){
    $dirr = scandir($dir);
    foreach($dirr as $item){
        echo $item . "<br>";
    }
}
dir_list(DIRECTORY_SEPARATOR);