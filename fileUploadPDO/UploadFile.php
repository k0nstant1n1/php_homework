<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.09.2017
 * Time: 23:30
 * моделируем UploadedFile + в этот класс метод upload()
 * который сохраняет файл на диск с рендомным названием - например md5()
создаем форму с полями 1. Заголовок 2. Файл
сохраняем в базу заголовок и сгенерированное название файла, а сам файл на диск
выводим таблицу со списком файлов, клик на файл скачивает его

 */

class UploadFile
{
    private static $fileName;
    private static $header;

    public static function upload(){
        if($_POST){
            if(isset($_FILES['file']) && !$_FILES['file']['error']){
                if(!is_dir('./files/')){
                    mkdir('./files/',0777, true);

                }
                $fileLastName = explode('/', $_FILES['file']['type'])[1];
                self::$fileName = md5(time()).'.'.$fileLastName;
                $fileName = './files/'.self::$fileName;
                self::$header = $_POST['header'];
                self::insertData(self::$fileName,$_POST['header']);
                file_put_contents($fileName, file_get_contents($_FILES['file']['tmp_name']));
            }
        }
    }

    public static function insertData($filename, $header){
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'upload';

            $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {
                $sql = "insert into files (header, fileName) 
                        values ('{$header}', '{$filename}');";
                $conn->exec($sql);
            }catch(PDOException $e){
            echo $sql . '<br>' . $e->getMessage();
        }
        $conn = null;
    }
}