<?php
/** Ваше задание создать массив, наполнить это случайными значениями (функция rand),
 * найти максимальное и минимальное значение и поменять их местами.
 */

$arr = array_fill(0,10,0);
$max = 0;
$min = 100;
foreach($arr as $key => &$item){
    $item = rand(1, 100);
    if($item > $max){
        $max = $item;
        $keyMax = $key;
    }
    if($item < $min){
        $min = $item;
        $keyMin = $key;
    }
}
echo "ось массив до заміни :<br>";
foreach($arr as $item){
    echo $item . ", ";
}

$arr[$keyMax] = $min;
$arr[$keyMin] = $max;

echo "<br> ось массив після заміни :<br>";
$str = implode(', ', $arr);
echo $str;