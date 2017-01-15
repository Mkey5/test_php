<?php 

    $count = 5;
    
    echo "This is the amout: {$count}BGN!"; //with {} u can separate a variable and normal text
    
    echo "\n";
    
    $uni = "Softuare , University !";
    
    $leng = strlen($uni); // gives the lenght of the str
    
    echo $leng . "\n";
    
    $leng_2 = str_word_count($uni); // returns the word count without ', . ! ? ' but '-' is a word . . .
    
    echo $leng_2 . "\n";
    
    
    $countries = "Brazil , UK , USA , Bulgaria , Germany";
    
    $country_to_find = "Bulgaria";
    
    $position_of_country = strpos($countries, $country_to_find); // returns (20) the position of the last element before the target
    
    echo $position_of_country ."\n";
    
    $the_str = strstr($countries, $country_to_find); /* returns (Bulgaria , Germany) the remaining of the str with the target 
    and the rest of the str */ 
    
    echo $the_str . "\n";
    
    
    $email = "marek@lidango.com";
    
    $name_end = strpos($email, '@'); // finding where @ is (5)
    
    $name = substr($email, 0 , $name_end); // returns (marek) --> str from 0 to 5 element ;)
    
    echo $name . "\n";
    
    $new_email = str_replace($name, "nakov" , $email); // finds "marek" and replaces it with "nakov"
    
    // str_ireplace is case insensitive version of str_replace
    
    echo $email . " New email: " . $new_email ."\n";
    
    
    $str_for_trim = "   test      ";
    
    $str_trimmed = trim($str_for_trim); // trims empty spaces
    
    echo $str_trimmed."\n";
    
    /* ltrim - trims left , rtrim - trims right */
    
    /* strtolower($str) , strtoupper($string) - to lower and upper case */
    
    $ala_bala = "alabala";
    
    $arr = str_split($ala_bala,2); // returns array , every value will be 2 char long (al, ab , al ,a)
    
    print_r($arr) ."\n";
    
    $ala_bala_2 = "ala,bala,ala,bala";
    
    $arr_2 = explode(",", $ala_bala_2); // returns arr , splitted by ","
    
    print_r($arr_2) . "\n";
    
    /* implode() does the opposite --> arr to string  */
    
    
    
    
    
    
    /* when in search bars u can use levenshtein($str1, $str2)   
     * 
     *  levenshtein
     * 
     * */
    
    
    
    // input misspelled word
    $input = 'carrrot';
    
    // array of words to check against
    $words  = array('apple','pineapple','banana','orange',
                    'radish','carrot','pea','bean','potato');
    
    // no shortest distance found, yet
    $shortest = -1;
    
    // loop through words to find the closest
    foreach ($words as $word) {
    
        // calculate the distance between the input word,
        // and the current word
        $lev = levenshtein($input, $word);
    
        // check for an exact match
        if ($lev == 0) {
    
            // closest word is this one (exact match)
            $closest = $word;
            $shortest = 0;
    
            // break out of the loop; we've found an exact match
            break;
        }
    
        // if this distance is less than the next found shortest
        // distance, OR if a next shortest word has not yet been found
        if ($lev <= $shortest || $shortest < 0) {
            // set the closest match, and shortest distance
            $closest  = $word;
            $shortest = $lev;
        }
    }
    
    echo "Input word: $input\n";
    if ($shortest == 0) {
        echo "Exact match found: $closest\n";
    } else {
        echo "Did you mean: $closest?\n";
    }
    
    
    
 ?>