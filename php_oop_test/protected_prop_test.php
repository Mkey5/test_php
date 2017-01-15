<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 23.10.2016 г.
 * Time: 16:37 ч.
 */

class Foo{
    protected $fooProp = "I am a protected Foo prop!";
}

class Boo extends Foo {
    public function print_prop(){
        echo $this-> fooProp; /* the prop is protected prop from Foo class
    so we can't work with it directly , but child classes can reach protected prop from the parent classes
    and this is one way to do that.
 */
    }
}

$myBoo = new Boo();
$myBoo->print_prop(); // this will output "I am a protected Foo prop!"



?>