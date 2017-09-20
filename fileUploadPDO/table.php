<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 19.09.2017
 * Time: 22:39
 */

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'upload';

$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
    $sql = $conn->prepare("select * from files order by id desc;");
    $sql->execute( );
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $res = $sql->fetchAll();
}catch(PDOException $e){
    echo $sql . '<br>' . $e->getMessage();
}
$conn = null;
?>
<table width="100%" border="1">
<tr><th>id</th><th>header</th><th>fileName</th></tr>
<?php
foreach($res as $row){  ?>
    <tr><td><?=$row['id']?></td>
        <td><?=$row['header']?></td>
        <td><a href="download.php?q=<?=$row['fileName']?>"><?=$row['fileName']?></a></td></tr>
<?php } ?>
    </table>
<?php