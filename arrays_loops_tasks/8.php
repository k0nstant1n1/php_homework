<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.07.2017
 * Time: 12:43
 */
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$str = '';
 foreach($arr as $item){
     $str .= (string)$item;
 }

 echo $str;