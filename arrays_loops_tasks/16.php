<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.07.2017
 * Time: 13:16
 */

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$i = 0;
foreach($arr as $item){
    if($i<2){
        echo $item . ", ";
        $i++;
    }
    else{
        echo $item . "<br>";
        $i = 0;
    }
}