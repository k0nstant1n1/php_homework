<?php
//Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
//выходные дни следует вывести жирным.

$week = array('monday','tuesday','wednesday','thursday','friday','saturday','sunday');

foreach($week as $key => $day){
    if($key == 6 || $key == 5){
        echo "<b>" . $day . "</b><br>";
    }
    else{
        echo $day . "<br>";
    }
}