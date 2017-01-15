<?php 
    
    $a = 5;
    
    if($a == 5){
        $b = 10;
    }
    
    echo $b . "\n"; // in php the scope of the variable if different then C# ,Java . . . because this will return 10
    
    
    unset($b); // this will delete the variable

    // echo $b;  this will return undefined variable
    
    /* Functions are undependent parts of code , so variables defined in them have scope only in them, not outside the
     * function , and variables defined outside the function also aren't accessible inside the function if they are not
     * one of the arguments given when the function is called /func test($arg1 , $arg2){}/. . . */
     
     $c = 3;
     
     function test_scope(){
         global $c; // without global it woud return undefined because $c is defined outside the func
         echo $c ."\n";
         
         $global_var_c = $GLOBALS['c']; // other way to use variable as global
         $global_var_c++;
         echo $global_var_c ."\n"; 
     }
     
     test_scope();  
    
    
    
    
    
 ?>