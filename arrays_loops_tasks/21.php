<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 17.07.2017
 * Time: 16:54
 */
$arr = range(1,9);
$arr2 = array_fill(0,9,'');
for($i = 0; $i < 9; $i++){
    for($j = $i; $j >= 0; $j--){
        $arr2[$i] .= $arr[$i];
    }
}

foreach($arr2 as $item){
    echo $item . "<br>";
}