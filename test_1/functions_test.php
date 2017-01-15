<?php 

    function calcRectArea($sideA , $sideB){
         return $sideA * $sideB;
    }

    echo calcRectArea(5, 8) . "\n";



// Draw a tree
    $sizeOfTree = 10;

    for ($i=1; $i <$sizeOfTree ; $i+=2) { 
        echo drawSegment($sizeOfTree, $i);
    }

    function drawSegment($size , $line){
        $clearance = ($size - $line)/2;
        for ($i=0; $i < $clearance ; $i++) { 
            echo "-";
        }
        
        for ($i=0; $i <$line ; $i++) { 
            echo "*";
        }
        
        echo "\n";
    }


// optional parameter in function

    function strIsEqual($str_1 , $str_2 , $ignoreCase = true){
	   if($ignoreCase){
	       return strtolower($str_1) == strtolower($str_2);
	   }else{
	       return $str_1 == $str_2;
	   }
    }
    
    echo strIsEqual("Hello", "hello", true)."\n"; // returns true -> 1
    echo strIsEqual("Hello", "hello")."\n"; // returns true -> 1
    echo strIsEqual("Hello", "hello", false)."\n"; // returns false -> " "

    
    
// pass parameter by reference

    function changeValue($arg){
        $arg+=100;
    }
   
   $num = 2;
   changeValue($num); 
   echo $num ."\n"; // will print only 2
   
   function changeValue_2(&$arg){  // with "&" -> this will change the value that was given to be used in the func
       $arg+=100;
   }
   
   changeValue_2($num); 
   echo $num ."\n"; // will print only 102
   
   
// funtion that gets infinite arguments

    function sumNumbers(){
        $sum = 0;
        foreach (func_get_args() as $arg) {
            $sum+=$arg;
        }
        return $sum;
    }
    
    echo sumNumbers(10,5,20)."\n"; // returns 35


// funtion for swapping 2 arguments

    function swap($a , $b){
        return array($b , $a) ;
    }

    $a = 3;
    $b = 5;
    
 
    list($a , $b) = swap($a, $b); // list $a = swap $a , list $b = swap $b . . .
    
    echo "$a $b" . "\n"; // will return "5 3" the numbers are swapped

    
//you can call functions by string

    function sum($a,$b){
        return $a+$b;
    }
    
    $func = "sum";
    
    echo $func(5,5); // this will call function sum and return 10
    

// check if the func does already exist 

    if (!function_exists("sum")){ // if the func "sum" exist it will not define it 
        function sum($a,$b){
            return $a+$b;
        }
    }  
        

 ?>