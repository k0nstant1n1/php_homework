<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 17.09.2017
 * Time: 21:09
 */
$conn = mysqli_connect('localhost','root','','fractions');
$sql = "select fraction1, fraction2, resFraction, operationDate from addFraction
        order by id desc;";
$res = mysqli_query($conn, $sql);
echo "<table border='1' width='50%'><tr><th>Дробь1</th><th>Дробь2</th><th>Сумма дробей</th><th>Дата сложения</th></tr>";
if(gettype($res) != 'boolean'){
    while($row = mysqli_fetch_assoc($res)){
        echo "<tr><td>{$row['fraction1']}</td>
                  <td>{$row['fraction2']}</td>
                  <td>{$row['resFraction']}</td>
                  <td>{$row['operationDate']}</td></tr>";
    }
}
echo '</table>';
mysqli_close($conn);