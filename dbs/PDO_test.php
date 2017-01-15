<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 31.10.2016 г.
 * Time: 10:14 ч.
 */

try{
    $host = "localhost:3306";
    $dbname = "world";
    $dbh = new PDO("mysql:host=$host;dbname=$dbname","root","");



    echo "Connected to DB <br> \n";

    //prepared SQL query
    $sql="INSERT INTO city(name , population) VALUES (:name ,:population)";
    $statement = $dbh->prepare($sql); //preparing the statement may help for optimising the querys

    $cityName ="Samovodene_3";
    $cityPopulation =60000;

    //assigning the values to the prepared query
    $statement->bindParam(':name',$cityName,PDO::PARAM_STR);
    $statement->bindParam(':population' ,$cityPopulation,PDO::PARAM_INT);

    $statement->execute(); //executing the query

    $last_id = $dbh->lastInsertId();
    echo "\n $last_id";
}
catch(PDOException $e){
    echo $e->getMessage();
}

?>