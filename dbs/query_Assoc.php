<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 27.10.2016 г.
 * Time: 21:12 ч.
 */

$host = "localhost:3306";
$dbName = "world";
$dbLink = mysqli_connect($host,"root",""); //connecting to DB


if(!mysqli_select_db($dbLink,$dbName)){ // selecting a table
    echo "ERROR";
}

$query = "select id , name from city";  // query to send to the DB

$result = mysqli_query($dbLink,$query); // sending the query and receiving data

if(!$result){
    echo "Error " . mysqli_error() ."\n";
    echo "Query: " .$query;
}

$row = mysqli_fetch_assoc($result);
//print_r($row);
//if($row){                            // this way we take only the first row
//    echo "id: " . $row['id']." ";
//    echo "Name: " . $row['name'];
//}

do{ //this way we go true the whole array
    echo "id: " . $row['id']." ";
    echo "Name: " . $row['name'];
    echo "<br>";
}while($row = mysqli_fetch_assoc($result))






?>