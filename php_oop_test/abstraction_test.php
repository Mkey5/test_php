<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 23.10.2016 г.
 * Time: 21:03 ч.
 */

abstract class AbstractClass{ // abstract classes must have at least one abstract function
    abstract public function getValue2($prefix);
    abstract protected function getValue();
    public function printOut(){
        echo $this->getValue();
    }
}

class Class1 extends  AbstractClass{
    public function getValue2($prefix)
    {
        echo $prefix . "NAC1";
    }

    protected function getValue()
    {
        return "Class1";
    }
}

class Class2 extends  AbstractClass{
    public function getValue2($prefix)
    {
        echo $prefix . "NAC2";
    }

    protected function getValue()
    {
        return "Class2";
    }
}

$class1 = new Class1();
$class1->printOut(); // "Class1"
echo "\n";
echo $class1->getValue2("FOO"); // "FOONAC1"
echo "\n";


$class2 = new Class2();
$class2->printOut(); // "Class2"
echo "\n";
echo $class2->getValue2("FOO"); // "FOONAC2"
echo "\n";


?>