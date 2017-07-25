<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<!-- Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
 Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
  Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
   в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors.
    В каждой ячейке должно находиться случайное число. -->
<body>
<?php $colors = array('red','yellow','blue','gray','maroon','brown','green') ?>
<form method="get">
    <input type="text" name="rows" placeholder="количество строк">
    <input type="text" name="cols" placeholder="количество столбцов">
    <input type="submit" name="submit" value="создать таблицу!">
</form>
    <?php if(@$_GET['submit']){ ?>
        <table border="1px">
        <?php
        for($i = 0; $i < $_GET['rows']; $i++){ ?>
            <tr>
                <?php for($j = 0; $j < $_GET['cols']; $j++){  ?>
                    <td style="background-color: <?php echo $colors[array_rand($colors,1)]  ?>; padding: 4px;">
                        <?php echo rand(1, 10000) ?>
                    </td>
                <?php } ?>
            </tr>
    <?php } ?>
        </table>
       <?php } ?>
</body>
</html>