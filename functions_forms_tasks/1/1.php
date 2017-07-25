<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 17.07.2017
 * Time: 13:38
 */
            function getCommonWords($a,$b){
                $arr1 = explode(" ", $a);
                $arr2 = explode(" ", $b);
                return array_intersect($arr1,$arr2);
            }

            $str = $_GET["field1"];
            $str2 = $_GET["field2"];

            $result = getCommonWords($str,$str2);
            foreach($result as $item){
                echo $item . "<br>";
            }
        ?>