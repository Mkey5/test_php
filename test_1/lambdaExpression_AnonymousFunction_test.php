<?php
echo preg_replace_callback('~-([a-z])~', function ($match) {
	var_dump($match);
    return strtoupper($match[1]);
}, 'hello-world');
// outputs helloWorld

$gosho = function(){
	echo "<br> Gosho";
};

$gosho();


 ?>