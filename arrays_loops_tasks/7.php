<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.07.2017
 * Time: 12:38
 */

$arr = array(2, 5, 9, 15, 0, 4);

foreach($arr as $item){
    if(3 < $item && $item < 10){
        echo $item . "<br>";
    }
}