<?php 

    function call_me(){
        static $count = 0; /*once the func is called the static variable is saved in the memory , so
         * everytime it's called again it will be updated /$count++/. . . */
        
        $count++;
        
        echo "call_me() is called $count times \n";
    }
    
    call_me();
    call_me();
    call_me();
 ?>