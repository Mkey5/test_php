<?php 

    /*
     * for type casting use is_int , is_doube , is_numeric , is_string
     * 
     * */

     
     echo is_int(1) ."\n"; //returns true /1/
     
     echo is_double(1) ."\n"; // returns false --> empty array " "
     
     echo is_numeric(1) ."\n"; // returns true /1/
     
     echo is_string("marek") ."\n"; // returns true /1/
     
     echo "\n";
     
     // reading the variables in the necessary type
     
    $test_1 = intval (42); //42
    $test_2 = intval (42); //42
    $test_3 = intval (4.2); // 4
    $test_4 = intval ('042'); // 42
    $test_5 = intval (true); // 1
    $test_6 = intval ('49.99 лв'); // 49
    
    echo "$test_1 , $test_2 , $test_3 , $test_4 , $test_5 , $test_6 \n";
    
    
    // settipe converts a variable to specified type
    
    $foo = "5 bottles of rakia";
    $bar = true;
    settype ($foo, 'int'); // $foo becomes 5
    settype ($bar, 'string'); //$bar becomes '1'
    
    echo $foo ."\n";
    echo $bar ."\n";     
     
    // type casting 
    
    $foo = true;
    echo (int)$foo ."\n"; // prints 1, $foo doesn’t change
    echo (string)FALSE ."\n"; // prints nothing…
         
    // escaping strings
    
    $string_test = "Ala bala <br> <script> alert('You shoudn\'t see this message !') </script> ; / ";
    
    //echo $string_test ."\n"; // in browsers it will return JS Alert pop-up and we don't want that 
    
    $new_safer_string = addslashes($string_test);
    echo $new_safer_string ."\n";
    
    // we can use 
    //addcslashes($str, $charlist) it will escape all the chars in the list
    echo addcslashes ("dimitar; format c:", ';:|<>\'"');

    //we can use also
    //quotemeta() it escapes . \ + * ? [ ^ ] ( $ )
    // and htmlspecialchars() convert HTML special characters to entities

?>