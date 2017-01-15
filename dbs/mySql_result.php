<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 27.10.2016 г.
 * Time: 22:00 ч.
 */

$dbLink = mysqli_connect("localhost:3306", "root" , "");

if(!mysqli_select_db($dbLink , "world")){
    echo "Error " .mysqli_error() . "\n";
    die();
}

$query = "select count(*) from city"; // count(*) will return the number of rows

$result = mysqli_query($dbLink, $query);

if(!$result){
    echo "Error" .mysqli_error() . "\n";
    echo "Query: " . $query;
    die();
}

$row = mysqli_fetch_row($result);
echo $row[0];




?>