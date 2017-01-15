<?php 

// Switch test 

    $name = "Nikifor";
    
    switch ($name) {
        case "Marek" :
        case "Nikifor" : //we can add multiple cases 
            echo "The cool dude is found !";
            break;
            
        case "Niki" :
            echo "Niki found !";
            break;
            
        case "Emo" :
            echo "Emo found !";
            break;
        
        case "Marti" :
            echo "Marti found !";
            break;
        
        default:
            echo "We can't find $name !";
            break;
    }
    
//     with the other syntax

       switch ($name) :
        case "Marek" :
        case "Nikifor" : //we can add multiple cases 
            echo "The cool dude is found !";
            break;
            
        case "Niki" :
            echo "Niki found !";
            break;
            
        case "Emo" :
            echo "Emo found !";
            break;
        
        case "Marti" :
            echo "Marti found !";
            break;
        
        default:
            echo "We can't find $name !";
            break;
    endswitch



 ?>