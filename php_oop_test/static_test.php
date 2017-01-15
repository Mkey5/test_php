<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 23.10.2016 г.
 * Time: 17:20 ч.
 */

//static properties are accessed with :: , with static we can not use $this

class Foo{
    public static $myProp = "Static Property";

    public static function printProp(){
        echo self:: $myProp;
    }
}

$myFoo = new Foo();
$myFoo::printProp(); //Output: "Static Property"
echo "\n";
Foo::printProp() /* Output: "Static Property" - there is no reason to create a new class of Foo just so we can
 call Foo's func printProp() */
?>