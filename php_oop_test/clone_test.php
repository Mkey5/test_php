<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 24.10.2016 г.
 * Time: 17:03 ч.
 */

class SubObject{
    static $instances = 0;
    public $instance;

    public function __construct(){
        $this->instance = ++ self::$instances;

    }

    public function __clone(){
        $this->instance = ++ self::$instances;
    }
}

class Myclonable{
    public $object1;
    public $object2;

    public function __clone(){
        // Force a copy of this->object, otherwise
        // it will point to same object.
        $this->object1 = clone $this->object1;
    }
}

$obj = new Myclonable();

$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$obj2 = clone $obj;

echo "Original object : \n";
print_r($obj);
echo "Cloned object: \n";
print_r($obj2);



?>