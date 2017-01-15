<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 23.10.2016 г.
 * Time: 16:27 ч.
 */

 class Foo{
     public $fooProp = "Foo property";

     public function printProp(){
         echo $this->fooProp;
     }
}

class Boo extends Foo{

}

$booObj = new Boo();
$booObj-> printProp(); //Outputs "Foo property"

?>