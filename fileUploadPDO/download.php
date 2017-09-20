<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.09.2017
 * Time: 9:46
 */

$file = './files/'.htmlspecialchars($_GET['q']);

if(file_exists($file)) {
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: filename="'.htmlspecialchars($_GET['q']).'"');
    header('Content-length: '.filesize($file));
    header('Cache-Control: no-cache');
    header("Content-Transfer-Encoding: chunked");

    readfile($file);
} else {
    header("HTTP/1.0 404 Not Found");
}