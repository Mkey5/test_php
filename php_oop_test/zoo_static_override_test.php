<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 23.10.2016 г.
 * Time: 19:45 ч.
 */

class Animal{

    public $name;
    public $age;
    public $type;

    private static $numberOfAnimals = 0;

    public function __construct($name,$age){
        self::$numberOfAnimals +=1; //counts how many animals do we have in the zoo

        $this->name=$name;
        $this->age=$age;
    }

    public static function printAllAnimals(){
        echo "Current number of animals in our zoo: ".self::$numberOfAnimals; /*for static we use self not this ,
 at the same class
 */
    }

    public function talk(){
        echo"Silence";
    }

    public function whoAmI(){
        echo "Hi ! My name is ".$this->name."! I'm a ". $this->type." and I'm ".$this->age." years old. \n";
    }
}

class Cat extends Animal{
    public function __construct($name,$age){
        parent::__construct($name,$age);
        $this->type= get_class($this);   //returns the class name and sets it to type
    }

    public function talk(){
        echo "Meow! \n";
    }
}

class Dog extends Animal{
    public function __construct($name,$age){
        parent::__construct($name , $age);
        $this->type = get_class($this);
    }

    public function talk(){
        echo "Baw! \n";
    }

}



$cat = new Cat("Kity",3);
$cat->whoAmI();
$cat->talk();

$dog = new Dog("Rex",4);
$dog->whoAmI();
$dog->talk();


Animal::printAllAnimals();


?>