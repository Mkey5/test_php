<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 24.10.2016 г.
 * Time: 11:54 ч.
 */

interface iAnimal{  /* interfaces must have only public functions , the funcs must only be defined

  */
    public function talk();
    public function walk();
}

class Cat implements iAnimal{ /* we extends a class with interface with "implements"
    One class may implement multiple interfaces, if they do not have methods with same names
 */
    public function talk(){
        echo "Meow";
    }

    public function walk(){
        echo "I'm walking";
    }
}

$cat = new Cat();
$cat->talk();
echo "\n";
$cat->walk();
echo "\n";
?>