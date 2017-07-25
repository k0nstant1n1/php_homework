
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="get">
    <input type="text" name="number" placeholder="enter number here">
    <input type="text" name="digit" placeholder="enter digit here">
    <input type="submit" name="submit">
</form>
</body>
</html>
<?php
/**
Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть выбранной вами цифры
 * в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза.
 */

function numberOfDigit($digit,$number){
    $numberStr = (string)$number;
    $numberarr = str_split($numberStr);
    $sum = 0;
    foreach($numberarr as $item){
        if($item === $digit){
            $sum++;
        }
    }
    return "в числе " . $number . " цифра " . $digit . " встречается " . $sum . " раз";
}
if(@$_GET['submit']){
 echo   numberOfDigit($_GET['digit'], $_GET['number']);
}

?>