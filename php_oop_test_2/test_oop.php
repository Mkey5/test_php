<?php 

class MyClass{

	public static $count = 0;

	public $prop1 = "I'm a class property!";

	public function __construct(){
		echo 'The class "', __CLASS__, '" was initiated!<br />'; // global __CLASS__ returns the name of the class
	}

	public function __destruct(){
		echo 'The class "', __CLASS__, '" was destroyed.<br />';
	}

	public function __toString(){				
		 echo "Using the toString method: ";
		 return $this->getProperty();
	}

	public function setProperty($newVal){
		$this->prop1 = $newVal;
	}

	public function getProperty(){
		return $this->prop1 ."<br />";
	}

	public static function plusOne(){
      	return "The count is " . ++self::$count . ".<br />"; // self is like this but for Classes
  	}
}

class MyOtherClass extends MyClass{
	public function __construct(){
		parent::__construct(); // Call the parent class's constructor first
      	echo "A new constructor in " . __CLASS__ . ".<br />";
	}

	public function newMethod(){
		echo "From a new method in " . __CLASS__ . ".<br />";
	}
}



// Create a new object
$newobj = new MyOtherClass;
 
// Output the object as a string
echo $newobj->newMethod();
 
// Use a method from the parent class
echo $newobj->getProperty();

do{
  // Call plusOne without instantiating MyClass
  echo MyClass::plusOne();
} while ( MyClass::$count < 10 );
 


?>