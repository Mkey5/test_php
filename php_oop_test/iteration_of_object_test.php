<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 24.10.2016 г.
 * Time: 15:51 ч.
 */

class A{
    public $var_1 = "public 1";
    public $var_2 = "public 2";
    protected $var_3 = "protected 3";
    private $var_4 = "private 4";

    public function printIteration(){
        foreach($this as $key=>$val){
            echo "$key : $val \n";
        }
    }
}

$objA= new A();

// this will print only the public values
foreach ($objA as $key => $val){
    echo "$key : $val \n";
}

echo "\n";

//this will print all the vals because the func is inside the class itself
$objA ->printIteration();


var_dump($objA);

?>