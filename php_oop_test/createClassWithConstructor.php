<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 23.10.2016 г.
 * Time: 15:50 ч.
 */

    class Foo{
        public $prop; // this is defining the property {the old method of defining is with var "var $prop;"}


        public function __construct($boo){
            $this ->prop = $boo; //this is how we assign a value to $prop

        }

        public function boo(){
            echo $this->prop . "\n";

        }
    }

    $myFirstObject = new Foo("This is property!");
    $myFirstObject ->boo(); // Outputs "This is property!"

?>