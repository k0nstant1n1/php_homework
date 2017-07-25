<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.07.2017
 * Time: 11:39
 */

$arr = array(26, 17, 136, 12, 79, 15);
$sum = 0;
foreach($arr as $item){
    $sum += $item*$item;
}
echo $sum;