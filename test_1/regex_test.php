<?php 

    /*
     * for testing :
     * 
     * http://www.phpliveregex.com/
     * 
     * */
    
    
     $str = "Hi , my name is Marek and this is my old email: marek-radkov@lidango.com , marek.radkov@lidango.com and this is my new one marekradkov@gmail.com";
     $is_this_a_email ="marekradkov@gmail.com";
         
     $email_regex_match_from_text = "/([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,6})+/"; // for match_all . . .
     $email_regex_for_checking_mail ="/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,6})+$/"; /* for checking  
      * 
      * only email value
      * */ 
 
        
     preg_match($email_regex_for_checking_mail, $is_this_a_email , $matched);
         
     print_r($matched) ;
        
     preg_match_all($email_regex_match_from_text, $str , $matced_2);
     
     print_r($matced_2);
    
    $subject = "abcdef";
    $pattern = '/^def/';
    preg_match($pattern, substr($subject,3), $matches);
    print_r($matches);
   
 
    
    
    if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
        echo "A match was found.";
    } else {
        echo "A match was not found.";
    }
    
    
    
    
    $userinfo = "Name: <b>John Poul</b> <br> Title: <b>PHP Guru</b>";
    preg_match_all ("/<b>(.*)<\/b>/U", $userinfo, $pat_array);
   
    print $pat_array[0][0]." <br> ".$pat_array[0][1]."\n";  // with <b> ,</b>
    print $pat_array[1][0] . " " . $pat_array[1][1] . "\n"; // only the text
    
    print_r($pat_array);
    
 
    
 // preg_replace
 
    $string = 'The quick brown fox jumps over the lazy dog.';
    
    echo "Original text: ". $string . "\n";
    
    $patterns = array('/quick/', '/brown/' , '/fox/');

    $replacements = array('slow' , 'black' , 'bear');
    
    echo "Replcesed text: ".preg_replace($patterns, $replacements, $string) ."\n"; 
  
    
    
    
    
    
    

 ?>