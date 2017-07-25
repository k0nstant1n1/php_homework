<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="get">
    <input type="text" name="digit">
    <input type="submit" name="submit">
</form>
</body>
</html>
<?php
/**23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем.
 * Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.

По желанию можете сделать проверку на корректность введения данных пользователем.
 */

function sumOfNumbers($integ){
    $str = (int)$integ;
    $arr = str_split($str);
    $sum = 0;
    foreach($arr as $item){
        $sum += (int)$item;
    }
    return $sum;
}

if(@$_GET['submit']){
  echo  sumOfNumbers($_GET['digit']);
}