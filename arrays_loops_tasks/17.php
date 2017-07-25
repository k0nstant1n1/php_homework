<?php
//Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
//месяц выведите жирным. Текущий месяц должен храниться в переменной $month.

$monthes = array('janvary','febriary','march','april','may','june','jule','august','september','october','november','december');
$month = 'jule';
foreach($monthes as $item){
    if($item === $month){
        echo "<b>" . $item . "</b><br>";
        continue;
    }
    echo $item . "<br>";

}