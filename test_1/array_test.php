<?php 

    $arr = array();
    
    for ($i=0; $i < 5 ; $i++) { 
        $arr[] = $i+1; // easiest way for adding in array
    }

print_r($arr);

$array_lenght = count($arr); //returns 5

echo $array_lenght;
?>