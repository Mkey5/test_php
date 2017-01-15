<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 23.10.2016 г.
 * Time: 20:26 ч.
 */

class Foo{
    const myconst = "value1"; //constants are not variables so they don't need $ to be defined
}

class Boo extends Foo{
    const myconst = "value2"; //const can be overriden but once it's defined it cannot be altered
    public function printConst(){
        echo self::myconst;
    }
}

$boo = new Boo;
$boo->printConst(); // prints value2

?>

