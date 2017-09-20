<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.09.2017
 * Time: 22:46
 */

spl_autoload_register(function($class){
    $path = '.'.DIRECTORY_SEPARATOR.$class.'.php';
    include_once $path;
});
require './form.html';
UploadFile::upload();
include './table.php';