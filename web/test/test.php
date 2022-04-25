<?php

namespace test;
include_once 'calcul.php';

class CalculatorTest{

    public function __construct(){
        self::testAddCorrect();
        self::testMinCorrect();
        self::testYmnCorrect();
        self::testDevCorrect();
    }

    public static function testAddCorrect(){
        echo 'Running ' .__METHOD__. '<br>';

        $result = Calculator::add(10,5);
        if ($result == 15){
            echo 'Пройден';
        }
        else
        {
            echo "Ошибка: expected(integer) 15. Result (".gettype($result) .") $result"; 
        }
        echo '<hr>';
    }

    public static function testMinCorrect(){
        echo 'Running ' .__METHOD__. '<br>';

        $result = Calculator::min(10,5);
        if ($result == 5){
            echo 'Пройден';
        }
        else
        {
            echo "Ошибка: expected(integer) 15. Result (".gettype($result) .") $result"; 
        }
        echo '<hr>';
    }
    
    public static function testYmnCorrect(){
        echo 'Running ' .__METHOD__. '<br>';

        $result = Calculator::ymn(10,5);
        if ($result == 50){
            echo 'Пройден';
        }
        else
        {
            echo "Ошибка: expected(integer) 15. Result (".gettype($result) .") $result"; 
        }
        echo '<hr>';
    }

    public static function testDevCorrect(){
        echo 'Running ' .__METHOD__. '<br>';

        $result = Calculator::divide(10,5);
        if ($result == 2){
            echo 'Пройден';
        }
        else
        {
            echo "Ошибка: expected(integer) 15. Result (".gettype($result) .") $result"; 
        }
        echo '<hr>';
    }
}

new CalculatorTest();