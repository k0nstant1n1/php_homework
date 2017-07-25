<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.07.2017
 * Time: 13:00
 */

$arr = array(4, 2, 5, 19, 13, 0, 10);

foreach($arr as $item){
    if($item == 2 || $item == 3 || $item == 4){
        $str = "Есть!";
        break;
    }
    else{
        $str = "Нет!";
    }
}

echo $str;