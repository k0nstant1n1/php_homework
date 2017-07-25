<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.07.2017
 * Time: 11:53
 */
$arr = array('kolya' => 200, 'vasya' => 300, 'petya' => 400);

foreach($arr as $key => $item){
    echo $key . " - зарплата " . $item . " долларов. <br>";
}