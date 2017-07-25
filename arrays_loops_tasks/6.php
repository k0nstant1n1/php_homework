<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.07.2017
 * Time: 11:59
 */
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array();
$ru = array();
$i = 0;
foreach($arr as $key => $value){
    $en[$i] = $key;
    $ru[$i] = $value;
    $i++;
}

