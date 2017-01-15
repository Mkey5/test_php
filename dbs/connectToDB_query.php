<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 27.10.2016 г.
 * Time: 13:58 ч.
 */

$host = "localhost:3306";
$dbName = "world";

$dblink = mysqli_connect($host, "root", "");

if(mysqli_select_db($dblink,$dbName)){
    echo "Connected! \n";
}
else{
    echo "Error";
    return;
}

$query = "select * from city limit 5";
$result = mysqli_query($dblink , $query);
if (!$result) {
    echo 'Error: ' . mysqli_error() . "\n";
    echo "Query: " . $query;
}
while ($currentRow = mysqli_fetch_row($result)) { // returns a standart array for every row
    var_dump($currentRow);
    //die();
    echo "<br>";
    echo $currentRow[0] . "\n";
    echo $currentRow[1] . "\n";

}


?>