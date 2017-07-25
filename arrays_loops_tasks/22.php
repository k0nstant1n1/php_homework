<?php
/**22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.

xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx
 */

$str = "XX";
for($i = 0; $i < 5; $i++){
    echo $str . "<br>";
    $str .= "XX";
}