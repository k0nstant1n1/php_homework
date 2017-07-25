<?php
//Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
//текущий день выведите курсивом. Текущий день должен храниться в переменной $day.

$week = array('monday','tuesday','wednesday','thursday','friday','saturday','sunday');
$day = 'tuesday';
foreach($week as $item){
    if($item == $day){
        echo "<i>" . $item ."</i><br>";
    }
    else{
        echo $item . "<br>";
    }
}