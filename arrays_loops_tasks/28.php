<?php
/*Вывести таблицу умножения с помощью двух циклов for.
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            таблица умножения
        </title>
        <meta charset="UTF-8">
    </head>
    <body>
        <table style="border: solid darkslategray 1px; padding: 8px;">
            <tr><th>*</th>
                <?php for($h = 1; $h < 10; $h++){ ?>
                <th><?php echo $h ?></th>
                <?php } ?>
            </tr>
            <?php for($i = 1; $i < 10; $i++){  ?>
                <tr><td><b><?php echo $i ?></b></td>
                    <?php for($j = 1; $j < 10; $j++){ ?>
                        <td style="padding: 20px; font-size: 22px;"><?php echo $i*$j ?></td>
                        <?php } ?>
                </tr>
            <?php  } ?>
        </table>
    </body>
</html>
