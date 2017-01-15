<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 30.10.2016 г.
 * Time: 17:00 ч.
 */

$dbLink= mysqli_connect("localhost:3306","root","");

if(!mysqli_select_db($dbLink,"world")){
    echo "Error " . mysqli_error();
    die();
}

$query = "select id , name from city limit 10";

$result = mysqli_query($dbLink,$query);

$count = mysqli_num_rows($result); // counts the number of the results

//var_dump($result);
//
//echo $result->num_rows;

for($i=$count-1; $i>=0 ; $i--){ // with this we can go trough the array from last element to the first
    mysqli_data_seek($result , $i); // Adjusts the result pointer to an arbitrary row in the result
    $row = mysqli_fetch_assoc($result);
    print_r($row);
}
