<?php

spl_autoload_register(function($class){
    $classputh = './'.$class.'.php';
    include_once $classputh;
});

include 'addFractionInterface.html';
try {
    if ($_POST) {
        $arr1 = explode('/', $_POST['fraction1']);
        $arr2 = explode('/', $_POST['fraction2']);
        $x = new Fraction($arr1[0], $arr1[1]);
        $y = new Fraction($arr2[0], $arr2[1]);
        $z = Fraction::addFraction($x, $y);
        echo "{$x} + {$y} = {$z}";
    }
}catch(Exception $e){
    echo $e->getMessage();
}
include './table.php';
