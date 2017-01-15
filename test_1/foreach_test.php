<?php 
    
    $arr = array(1, 3, -5, 7 );

    foreach ($arr as $value) {
        echo $value . "\n";
    }


    
    echo "\n";

    $colors = array ("orange","yellow","green","blue");
    
    foreach ($colors as $value){
        echo "$value ";
    }

    echo "\n";
    
    $colormap = array("red" => "FF0000" , "green" => "00FF00" , "blue" => "000FF");

    foreach ($colormap as $key => $value) {
        echo "Color : $key has that colormap : $value";
        echo "\n";
    }
     echo "\n";
     
     $users = array(
        "Pesho" => array(
            "email" => "pesho@gmail.com",
            "phone" => "0123456678"
        ),
        
        "Kiro" => array(
            "phone" => "000000000",
            "webpage" => "https://www.kiro.co.uk"
        ),
        
        "Mitko" => array(
            "email" => "mitko@gmail.com",
            "phone" => "02020202202020",
            "webpage" => "http://www.mitko.com"
        )
     );
    
    foreach ($users as $key => $value) {
        $currentUser = $users[$key];
        echo "User: $key \n";
        
        
        if(array_key_exists('email', $currentUser)){  // checks if the key 'email' exists in this user
            $email =$currentUser['email'];
            echo "Email: $email \n";    
        }       
        
        if(array_key_exists('phone', $currentUser)){  // checks if the key 'phone' exists in this user
            $email =$currentUser['phone'];
            echo "Phone: $email \n";    
        }
        
        echo "\n";

        for($i=0; $i<10 ; $i++){
            echo $i . " guz ! \n";
        }
    }

    
 ?>