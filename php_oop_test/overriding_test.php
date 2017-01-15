<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 23.10.2016 г.
 * Time: 16:46 ч.
 */

//we can override functions when extending a class

class Foo{
    public function forOverriding(){}
}

class Boo extends Foo{
    public function forOverriding(){} // we just made a func with the same name , this is how we override
}