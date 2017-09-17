<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.09.2017
 * Time: 13:54
 */

class Fraction
{
    public $numerator;
    public $denominator;

    public function __construct(int $numerator, int $denominator)
    {
            if (!$denominator) {
                throw new Exception('Знаменателем не может быть ноль.');
            }
            $this->numerator = $numerator;
            $this->denominator = $denominator;
    }

    public function decimalValue($quentitySignsAfterComa = 2){
        $value = $this->numerator / $this->denominator;
        $value = round($value, $quentitySignsAfterComa);
        return $value;
    }

    public function __toString(){
        $str = $this->numerator.'/'.$this->denominator;
        return $str;
    }

    public function GCD(){
        $divisorsOfNumerator = []; // создаем массив всех делителей числителя
        for($i = 1; $i <= $this->numerator; $i ++){
            if($this->numerator%$i === 0){
                $divisorsOfNumerator[] = $i;
            }
        }
        $divisorsOfDenominator = []; // создаем массив всех делителей знаменателя
        for($i = 1; $i <= $this->numerator; $i ++){
            if($this->denominator%$i === 0){
                array_push($divisorsOfDenominator, $i);
            }
        }
        $GreatestCommonDivisor = 0;
        $commonDivisors = array_intersect($divisorsOfDenominator, $divisorsOfNumerator);//находим точки пересечения массивов
        if($commonDivisors){
            foreach($commonDivisors as $divisor){       // находим наибольший общий делитель
                if($divisor > $GreatestCommonDivisor){
                    $GreatestCommonDivisor = $divisor;
                }
            }
        }
        return $GreatestCommonDivisor;
    }

    public function simplier(){  // упрощение дроби
        $GCD = $this->GCD();
        if($GCD){
            $this->numerator = $this->numerator/$GCD;
            $this->denominator = $this->denominator/$GCD;
        }
    }

    public static function addFraction(Fraction $x, Fraction $y){  // сложение дробей
        $denomX = $x->denominator;
        $denomY = $y->denominator;
        $denomZ = $denomX * $denomY;
        $numX =   $x->numerator *   $denomY;
        $numY =   $y->numerator *   $denomX;
        // блок кода выше реализует приведение дробей к общему знаменателю

        $numZ = $numX + $numY;
        $z = new Fraction($numZ, $denomZ);
        $z->simplier();
        self::insertValueToSql($x, $y, $z);
        return $z;
    }

    public static function insertValueToSql(Fraction $x, Fraction $y, Fraction $z){
        $conn = mysqli_connect('localhost','root','');
        if(!$conn){
            die('Connection error: '. mysqli_connect_error());
        }
        $sqlQuery = "create database if not exists fractions;";
        $sqlQuery .= 'use fractions;';
        $sqlQuery .= 'create table if not exists addFraction(
                      id int(10) auto_increment primary key,
                      fraction1 varchar(20) not null,
                      fraction2 varchar(20) not null,
                      resFraction varchar(20) not null,
                      operationDate datetime);';
        $sqlQuery .= "insert into addFraction (fraction1, fraction2, resFraction, operationDate) 
                         values ('{$x}', '{$y}', '{$z}',{date('Y-m-d H:i:s')});";  //добавляет заместо даты нули, не знаю что делать
        if(!mysqli_multi_query($conn,$sqlQuery)){
            die('some thing goes wrong');
        }
        mysqli_close($conn);
    }
}