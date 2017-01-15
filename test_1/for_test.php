<?php 

    for ($i=0; $i < 10 ; $i++) { 
    	echo "$i";
        echo "\n";
    }
    
    echo "\n";
    
    for ($k=1; $k <= 4294967296; $k=$k*2) { 
        echo $k . "\n";  //concatenation
    }
    
     echo "\n";

    $factorial = 1;
    
    for ($j=1; $j < 10; $j++) { 
        $factorial *= $j;
    }
    
    echo "The factorial is : $factorial";
 ?>