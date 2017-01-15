<?php 
    
    // include 'func_for_incl.php';  this will include all the funcs in the file
    // include 'func_for_incl.php'; but if we include it again we will get fatal error , so use include_once
    include_once 'func_for_incl.php';  // require is the same as include , include gives warnings , require gives fatal error...
    
    $num_1 = 5;
    
    $num_2 = 5;
    
    echo sum($num_1, $num_2) . "\n";
    echo strIsEqual("Hello", "hello" , true) ? "they are the same" . "\n" : "they are different" ."\n";
    echo sumNumbers(10,5,1). "\n";
    echo calcRectArea(10, 5);
    
 ?>