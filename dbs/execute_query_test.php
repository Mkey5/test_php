<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 30.10.2016 г.
 * Time: 16:19 ч.
 */

$dbLink = mysqli_connect("localhost:3306","root","");

if(!$dbLink){
    echo "Error";
    die();
}

if(!mysqli_select_db($dbLink , "world")){
    echo "Error";
    die();
}


$query = 'insert into city (name , Population) values ("Kaspichan","11111")';
$result = mysqli_query ($dbLink , $query);
echo mysqli_insert_id($dbLink);

?>