<?php
/*Подсчитайте, сколько раз каждый фрукт встречается в этой строке. Выведите в виде списка в порядке уменьшения количества.
 */

$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня
 груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня
  вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';

function calculateFruits($str){
    $arr = explode(' ', $str);
    $apple = $cherry = $Cherry = $pear = 0;
    foreach($arr as $frut){
        switch($frut){
            case "яблоко":
                $apple++;
                continue;
            case "вишня":
                $cherry++;
                continue;
            case "черешня":
                $Cherry++;
                continue;
            case "груша":
                $pear++;
                continue;
        }
    }
   $kindoffruit = array("яблоко" => $apple, "вишня" => $cherry, "черешня" => $Cherry, "груша" => $pear);
    arsort($kindoffruit);
    $finalStr = '<ol>';
    foreach($kindoffruit as $key => $value){
        $finalStr .= "<li>" . $key . " - " . $value . "</li>";
    }
    return $finalStr . "</ol>";
}

echo calculateFruits($string);