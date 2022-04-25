<?php
namespace test;
class Calculator{
    public static function add($a, $b){
        return $a+$b;
    }

    public static function min($a, $b){
        return $a-$b;
    }

    public static function ymn($a, $b){
        return $a*$b;
    }

    public static function divide($a, $b){
        if($a ==0){
            return null;
        } 
        return $a/$b;
    }
}