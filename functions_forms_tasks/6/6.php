<?php
/**Создать страницу, на которой можно загрузить несколько фотографий в галерею.
 * Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.</p>

 */$fileName = "file_";
$counter = 1;
function fileNames(&$fileName,&$counter){
    $fileName .= $counter;
    $counter++;
    return $fileName;
}


if($_SERVER['REQUEST_METHOD']=='POST'){
    if(array_key_exists('upload',$_FILES) && !@$_FILES['error']){
        $imageDir = __DIR__ . DIRECTORY_SEPARATOR . 'gallery' ;
        if(!is_dir($imageDir)){
            mkdir($imageDir, 0777, true);
        }

        file_put_contents($imageDir .DIRECTORY_SEPARATOR . time() . '.jpg',file_get_contents($_FILES['upload']['tmp_name']));
        echo "файл загружен";

    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>gallery</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <form enctype="multipart/form-data" method="post">
            <input type="file" name="upload" />
            <input type="submit" name="submit" value="submit"/>
        </form>
        <table><?php $gallery = scandir(__DIR__.DIRECTORY_SEPARATOR.'gallery'); ?>
            <tr>
                <?php  foreach($gallery as $image){
                    if($image === '.' || $image === '..'){continue;}   ?>
                <td><img src="<?php echo 'gallery'.DIRECTORY_SEPARATOR.$image ?>" width="100px;"/></td>
              <?php } ?>
            </tr>
        </table>
    </body>
</html>
