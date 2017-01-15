<?php 

    function calcRectArea($sideA , $sideB){
         return $sideA * $sideB;
    }
    
    
    function strIsEqual($str_1 , $str_2 , $ignoreCase = true){
       if($ignoreCase){
           return strtolower($str_1) == strtolower($str_2);
       }else{
           return $str_1 == $str_2;
       }
    }
    
    
    function sumNumbers(){
        $sum = 0;
        foreach (func_get_args() as $arg) {
            $sum+=$arg;
        }
        return $sum;
    }
    
    
    function sum($a,$b){
        return $a+$b;
    }

 ?>