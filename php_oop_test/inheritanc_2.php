<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 23.10.2016 г.
 * Time: 16:58 ч.
 */

class Animal{
    public $name;
    public $age;

    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }

    public function talk(){
        echo "I'm an animal , I can't talk!";
    }
}

class Cat extends Animal{
    public function __construct($name,$age){
        parent::__construct($name,$age);  /* with this we give the parameters of the current Cat constructor
  to be assign in the parent constructor above
  */
    }

    public function talk(){  // we are overriding Animal func with the same name
        echo "Myauu";
    }
}

$cat = new Cat("Pesho",3);

echo "Cat Name ". $cat->name;
echo "\n";
echo "Cat Age ". $cat->age;
echo "\n";
echo "Cat say: ";
$cat->talk();
echo "\n";

?>